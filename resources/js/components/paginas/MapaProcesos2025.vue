<template>
  <div>
    <div class="content-header bg-light shadow-sm">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-7">
            <h1 class="m-0"><small>Mapa de Procesos GOREHCO 2025</small></h1>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link :to="'/'">Inicio</router-link></li>
              <li class="breadcrumb-item active">Mapa de procesos</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-4 mapa-procesos">
      <div v-if="!procesoSeleccionado" class="mapa-toolbar">
        <div>
          <p class="mapa-eyebrow">GOREHCO {{ mapa.version }}</p>
          <h2>{{ mapa.titulo }}</h2>
          <p>{{ mapa.subtitulo }}</p>
        </div>
      </div>

      <template v-if="!procesoSeleccionado">
        <div class="mapa-nivel-cero">
          <aside class="mapa-lateral mapa-lateral-izq">
            Requisitos y necesidades de las personas que reciben los bienes y servicios de la entidad
          </aside>

          <section class="mapa-cuerpo">
            <div
              v-for="grupo in mapa.grupos"
              :key="grupo.id"
              :class="['grupo-procesos', grupo.clase]"
            >
              <h3>{{ grupo.titulo }}</h3>
              <div class="procesos-grid" :class="'items-' + grupo.procesos.length">
                <router-link
                  v-for="proceso in grupo.procesos"
                  :key="proceso.codigo"
                  :to="rutaProceso(proceso)"
                  :class="['proceso-card', grupo.clase]"
                >
                  <span class="proceso-codigo">{{ proceso.codigo }}</span>
                  <span class="proceso-nombre">{{ proceso.nombre }}</span>
                </router-link>
              </div>
            </div>
          </section>

          <aside class="mapa-lateral mapa-lateral-der">
            Requisitos y necesidades de las personas que reciben los bienes y servicios de las entidades satisfechas
          </aside>
        </div>

        <div class="mapa-resumen">
          <span><strong>{{ mapa.resumen.nivel0 }}</strong> Nivel 0</span>
          <span><strong>{{ mapa.resumen.nivel1 }}</strong> Nivel 1</span>
        </div>
      </template>

      <div v-else class="detalle-proceso">
        <router-link to="/mapa-procesos-2025" class="btn-volver">
          Volver al mapa
        </router-link>

        <div :class="['detalle-encabezado', grupoSeleccionado.clase]">
          <span>{{ procesoSeleccionado.codigo }}</span>
          <div>
            <p>{{ grupoSeleccionado.titulo }}</p>
            <h2>{{ procesoSeleccionado.nombre }}</h2>
            <div class="detalle-acciones">
              <button v-if="mostrarFichaCompleta" type="button" @click="fichaAbierta = true">Ver ficha</button>
              <a v-if="tienePdfProceso" :href="urlPdfProceso" target="_blank" rel="noopener">Abrir PDF</a>
            </div>
          </div>
        </div>

        <section v-if="procesoSeleccionado.ficha" class="resumen-proceso">
          <div>
            <span>Objetivo del proceso</span>
            <p>{{ procesoSeleccionado.ficha.objetivo }}</p>
          </div>
          <div>
            <span>Dueños del proceso</span>
            <ul>
              <li v-for="item in procesoSeleccionado.ficha.dueno" :key="item">{{ item }}</li>
            </ul>
          </div>
        </section>

        <div v-if="subprocesoSeleccionado" class="subproceso-detalle">
          <span>{{ subprocesoSeleccionado.codigo }}</span>
          <h3>{{ subprocesoSeleccionado.nombre }}</h3>
        </div>

        <div class="nivel-uno-lista">
          <h3>Procesos de Nivel 1</h3>
          <div class="nivel-uno-grid">
            <router-link
              v-for="item in procesosNivelUno"
              :key="item.codigo"
              :to="rutaSubproceso(procesoSeleccionado, item)"
              :class="['nivel-uno-item', { activo: subprocesoSeleccionado && subprocesoSeleccionado.codigo === item.codigo }]"
            >
              <span>{{ item.codigo }}</span>
              <strong>{{ item.nombre }}</strong>
            </router-link>
          </div>
        </div>

        <section class="normatividad-proceso" aria-labelledby="normatividadTitulo">
          <div class="normatividad-head">
            <div>
              <span>Normativa vinculada al proceso</span>
              <h3 id="normatividadTitulo">{{ procesoSeleccionado.codigo }}. {{ procesoSeleccionado.nombre }}</h3>
            </div>
            <strong v-if="normatividadCargando">Cargando</strong>
            <strong v-else>{{ normatividad.total }} documento{{ normatividad.total === 1 ? '' : 's' }}</strong>
          </div>

          <div class="normatividad-panel">
            <div class="normatividad-filtros">
              <label>
                <span>Tipo de documento</span>
                <select v-model="filtrosNormatividad.tipo" @change="cargarNormatividad()">
                  <option value="">Todos</option>
                  <option v-for="tipo in tiposNormatividad" :key="tipo.clave" :value="tipo.valor">{{ tipo.etiqueta }}</option>
                </select>
              </label>
              <label>
                <span>Año</span>
                <select v-model="filtrosNormatividad.anio" @change="cargarNormatividad()">
                  <option value="">Todos</option>
                  <option v-for="anio in aniosNormatividad" :key="anio" :value="anio">{{ anio }}</option>
                </select>
              </label>
              <label class="normatividad-busqueda">
                <span>Buscar en este proceso</span>
                <div>
                  <input v-model.trim="filtrosNormatividad.texto" type="search" placeholder="Buscar" @keyup.enter="cargarNormatividad()">
                  <button class="btn-buscar" type="button" @click="cargarNormatividad()">Buscar</button>
                  <button class="btn-limpiar" type="button" @click="limpiarNormatividad">Limpiar</button>
                </div>
              </label>
            </div>

            <p v-if="normatividadError" class="documentos-vacio">{{ normatividadError }}</p>
            <p v-else-if="normatividadCargando" class="documentos-vacio">Consultando normativa relacionada...</p>
            <p v-else-if="!documentosNormativos.length" class="documentos-vacio">No hay normativa publicada para este proceso.</p>

            <div v-else class="documentos-lista">
              <article v-for="documento in documentosNormativos" :key="documento.id" class="documento-item">
                <div class="documento-main">
                  <div class="documento-kicker">
                    <span>{{ tipoNormativo(documento) }}</span>
                    <strong>{{ formatoFecha(documento.reg_date) }}</strong>
                  </div>
                  <h4>{{ documento.reg_title || ('Documento ' + documento.reg_num) }}</h4>
                  <p>{{ descripcionNormativa(documento) }}</p>
                </div>
                <div class="documento-archivo">
                  <a
                    v-if="archivoPrincipal(documento)"
                    class="archivo-pdf"
                    :href="urlArchivoNormativo(archivoPrincipal(documento))"
                    target="_blank"
                    rel="noopener"
                    :title="archivoPrincipal(documento).file_name || 'Abrir PDF'"
                    :aria-label="archivoPrincipal(documento).file_name || 'Abrir PDF'"
                  ><i class="fas fa-file-pdf" aria-hidden="true"></i></a>
                  <em v-else>Sin PDF</em>
                </div>
              </article>
            </div>

            <div v-if="normatividad.ultimaPagina > 1 && !normatividadCargando" class="normatividad-paginacion">
              <button type="button" :disabled="normatividad.pagina === 1" @click="cargarNormatividad(normatividad.pagina - 1)">Anterior</button>
              <span>Página {{ normatividad.pagina }} de {{ normatividad.ultimaPagina }}</span>
              <button type="button" :disabled="normatividad.pagina === normatividad.ultimaPagina" @click="cargarNormatividad(normatividad.pagina + 1)">Siguiente</button>
            </div>
          </div>
        </section>

        <div class="diagramas-precarga" aria-hidden="true">
          <img v-for="diagrama in diagramasProceso" :key="diagrama.src" :src="diagrama.src" alt="" @load="registrarDiagrama(diagrama.src, true)" @error="registrarDiagrama(diagrama.src, false)">
        </div>
        <section v-if="diagramasVisibles.length" class="diagramas-proceso" aria-label="Diagramas del proceso">
          <a v-for="diagrama in diagramasVisibles" :key="diagrama.src" :href="diagrama.src" target="_blank" rel="noopener">
            <img :src="diagrama.src" :alt="diagrama.alt || ('Diagrama de ' + procesoSeleccionado.nombre)">
          </a>
        </section>

        <div v-if="mostrarFichaCompleta && fichaAbierta" class="modal-ficha" @click.self="fichaAbierta = false">
          <section class="modal-ficha-contenido" role="dialog" aria-modal="true" aria-label="Ficha del proceso">
            <div class="modal-ficha-barra">
              <div>
                <span>Ficha del proceso</span>
                <strong>{{ procesoSeleccionado.codigo }}. {{ procesoSeleccionado.nombre }}</strong>
              </div>
              <button type="button" aria-label="Cerrar ficha" @click="fichaAbierta = false">x</button>
            </div>

        <section v-if="procesoSeleccionado.ficha" class="ficha-proceso">
          <div class="ficha-titulo">Ficha del Proceso Nivel 0</div>
          <div class="ficha-grid">
            <div class="ficha-label">Nombre del proceso</div>
            <div>{{ procesoSeleccionado.codigo }}. {{ procesoSeleccionado.nombre }}</div>
            <div class="ficha-label">Version</div>
            <div>{{ procesoSeleccionado.ficha.version }}</div>

            <div class="ficha-label">Objetivo del proceso</div>
            <div>{{ procesoSeleccionado.ficha.objetivo }}</div>
            <div class="ficha-label">Tipo de Proceso</div>
            <div>{{ procesoSeleccionado.ficha.tipo }}</div>

            <div class="ficha-label">Dueno del Proceso</div>
            <div>
              <ul>
                <li v-for="item in procesoSeleccionado.ficha.dueno" :key="item">{{ item }}</li>
              </ul>
            </div>

            <div class="ficha-label">Objetivo estrategico</div>
            <div>
              <ul>
                <li v-for="item in procesoSeleccionado.ficha.objetivoEstrategico" :key="item">{{ item }}</li>
              </ul>
            </div>
          </div>
        </section>

        <section v-if="procesoSeleccionado.descripcion" class="descripcion-proceso">
          <button
            type="button"
            class="acordeon-titulo"
            @click="descripcionAbierta = !descripcionAbierta"
          >
            <span>Descripcion del Proceso</span>
            <span>{{ descripcionAbierta ? '-' : '+' }}</span>
          </button>
          <div v-show="descripcionAbierta" class="descripcion-tabla">
            <div class="descripcion-head">Proveedor</div>
            <div class="descripcion-head">Entrada</div>
            <div class="descripcion-head">Codigo</div>
            <div class="descripcion-head">Proceso Nivel 1</div>
            <div class="descripcion-head">Responsable</div>
            <div class="descripcion-head">Producto</div>
            <div class="descripcion-head">Receptor</div>

            <template v-for="fila in procesoSeleccionado.descripcion">
              <div :key="fila.codigo + '-proveedor'">{{ fila.proveedor }}</div>
              <div :key="fila.codigo + '-entrada'">{{ fila.entrada }}</div>
              <div :key="fila.codigo + '-codigo'" class="descripcion-codigo">{{ fila.codigo }}</div>
              <div :key="fila.codigo + '-proceso'"><strong>{{ fila.proceso }}</strong></div>
              <div :key="fila.codigo + '-responsable'">{{ fila.responsable }}</div>
              <div :key="fila.codigo + '-producto'">
                <ul>
                  <li v-for="item in fila.producto" :key="item">{{ item }}</li>
                </ul>
              </div>
              <div :key="fila.codigo + '-receptor'">
                <ul>
                  <li v-for="item in fila.receptor" :key="item">{{ item }}</li>
                </ul>
              </div>
            </template>
          </div>
        </section>

        <div v-if="subprocesoSeleccionado" class="subproceso-detalle">
          <span>{{ subprocesoSeleccionado.codigo }}</span>
          <h3>{{ subprocesoSeleccionado.nombre }}</h3>
        </div>

        <div class="nivel-uno-lista">
          <h3>Procesos de Nivel 1</h3>
          <div class="nivel-uno-grid">
            <router-link
              v-for="item in procesosNivelUno"
              :key="item.codigo"
              :to="rutaSubproceso(procesoSeleccionado, item)"
              :class="['nivel-uno-item', { activo: subprocesoSeleccionado && subprocesoSeleccionado.codigo === item.codigo }]"
            >
              <span>{{ item.codigo }}</span>
              <strong>{{ item.nombre }}</strong>
            </router-link>
          </div>
        </div>

        <section v-if="procesoSeleccionado.indicadores" class="indicadores-proceso">
          <h3>Indicadores y Control del Proceso</h3>
          <div
            v-for="indicador in procesoSeleccionado.indicadores"
            :key="indicador.codigo"
            class="indicador-card"
          >
            <button
              type="button"
              class="indicador-head"
              @click="toggleIndicador(indicador.codigo)"
            >
              <span>{{ indicador.codigo }}</span>
              <h4>{{ indicador.nombre }}</h4>
              <em>{{ indicadorAbierto(indicador.codigo) ? '-' : '+' }}</em>
            </button>
            <div v-show="indicadorAbierto(indicador.codigo)">
              <div class="indicador-grid">
                <div class="ficha-label">Producto</div>
                <div>
                  <ul>
                    <li v-for="item in indicador.producto" :key="item">{{ item }}</li>
                  </ul>
                </div>
                <div class="ficha-label">Tipo</div>
                <div>{{ indicador.tipo }}</div>
                <div class="ficha-label">Justificacion</div>
                <div>{{ indicador.justificacion }}</div>
                <div class="ficha-label">Responsable</div>
                <div>
                  <strong>Medicion:</strong> {{ indicador.responsable.medicion }}<br>
                  <strong>Accion:</strong> {{ indicador.responsable.accion }}
                </div>
                <div class="ficha-label">Formula</div>
                <div>{{ indicador.formula }}</div>
                <div class="ficha-label">Donde</div>
                <div>{{ indicador.donde }}</div>
                <div class="ficha-label">Sentido esperado</div>
                <div>{{ indicador.sentido }}</div>
                <div class="ficha-label">Unidad / Frecuencia</div>
                <div>{{ indicador.unidad }} / {{ indicador.frecuencia }}</div>
                <div class="ficha-label">Fuente de datos</div>
                <div>{{ indicador.fuente }}</div>
              </div>
              <div class="logros-grid">
                <div class="logro-item base">
                  <span>Linea de base</span>
                  <strong>{{ indicador.lineaBase.anio }}</strong>
                  <em>{{ indicador.lineaBase.valor }}</em>
                </div>
                <div v-for="logro in indicador.logros" :key="logro.anio" class="logro-item">
                  <span>Logro esperado</span>
                  <strong>{{ logro.anio }}</strong>
                  <em>{{ logro.valor }}</em>
                </div>
              </div>
            </div>
          </div>
        </section>

          </section>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import mapa from '../../data/mapa-procesos-2025.json';

const diagramasPorProceso = {
  E1: '/img/mapa-procesos/E1. DIRECCIONAMIENTO ESTRATEGICO.png',
  E2: '/img/mapa-procesos/E2. GESTION DE DESARROLLO Y MODERNIZACION INSTITUCIONAL.png',
  E3: '/img/mapa-procesos/E3. GESTION DE ALIANZAS Y POSICIONAMIENTO INSTITUCIONAL.png',
  E4: '/img/mapa-procesos/E4. Gestión del sistema de control interno y la integridad institucional.png',
  M1: '/img/mapa-procesos/M1.png',
  S1: '/img/mapa-procesos/S1. GESTION DEL RECURSO HUMANO.png',
  S2: '/img/mapa-procesos/S2. GESTION CONTABLE Y FINANCIERA.png',
  S3: '/img/mapa-procesos/S3 GESTION DE bienes y servicios.png',
  S4: '/img/mapa-procesos/S4. GESTION DE LAS INVERSIONES.png',
  S5: '/img/mapa-procesos/S5. GESTIÓN DE TRANSFORMACIÓN DIGITAL.png',
  S6: '/img/mapa-procesos/S6. GESTIÓN DE ASUNTOS LEGALES.png',
  S7: '/img/mapa-procesos/S7. Gestión de archivo.png',
  S8: '/img/mapa-procesos/S8. GESTIÓN DE TRANSPARENCIA Y ATENCIÓN AL CIUDADANO.png'
};

export default {
  name: 'MapaProcesos2025',
  data() {
    return {
      mapa,
      fichaAbierta: false,
      descripcionAbierta: false,
      indicadoresAbiertos: {},
      diagramasCargados: {},
      normatividad: {
        documentos: [],
        tipos: [],
        pagina: 1,
        ultimaPagina: 1,
        total: 0
      },
      filtrosNormatividad: {
        tipo: '',
        anio: '',
        texto: ''
      },
      normatividadCargando: false,
      normatividadError: ''
    }
  },
  computed: {
    grupoSeleccionado() {
      if (!this.$route.params.codigo) {
        return null;
      }

      return this.mapa.grupos.find(grupo => {
        return grupo.procesos.some(proceso => proceso.codigo === this.$route.params.codigo);
      }) || null;
    },
    procesoSeleccionado() {
      if (!this.grupoSeleccionado) {
        return null;
      }

      return this.grupoSeleccionado.procesos.find(proceso => {
        return proceso.codigo === this.$route.params.codigo;
      }) || null;
    },
    subprocesoSeleccionado() {
      if (!this.procesoSeleccionado || !this.$route.params.subcodigo) {
        return null;
      }

      return this.procesosNivelUno.find(item => {
        return item.codigo === this.$route.params.subcodigo;
      }) || null;
    },
    documentosNormativos() {
      return this.normatividad.documentos;
    },
    tiposNormatividad() {
      const grupos = {
        instructivo: { clave: 'instructivo', etiqueta: 'Instructivo', ids: [] },
        directiva: { clave: 'directiva', etiqueta: 'Directiva', ids: [] },
        directiva20: { clave: 'directiva20', etiqueta: 'Directiva 2.0', ids: [] }
      };

      this.normatividad.tipos.forEach(tipo => {
        const nombre = this.normalizarTipoNormativa(tipo.tip_description);
        const id = tipo.id;

        if (!id) {
          return;
        }

        if (nombre.includes('directiva') && nombre.includes('2.0')) {
          grupos.directiva20.ids.push(id);
          return;
        }

        if (nombre === 'directiva' || nombre === 'directivas') {
          grupos.directiva.ids.push(id);
          return;
        }

        if (nombre.includes('instructivo')) {
          grupos.instructivo.ids.push(id);
        }
      });

      return [grupos.instructivo, grupos.directiva, grupos.directiva20]
        .filter(grupo => grupo.ids.length)
        .map(grupo => ({
          ...grupo,
          valor: grupo.ids.join(',')
        }));
    },
    aniosNormatividad() {
      const anioActual = new Date().getFullYear();
      return Array.from({ length: anioActual - 1991 + 1 }, (_, indice) => anioActual - indice);
    },
    diagramasProceso() {
      if (!this.procesoSeleccionado) {
        return [];
      }
      const codigo = this.procesoSeleccionado.codigo;
      const src = diagramasPorProceso[codigo];
      return src ? [{ src: encodeURI(src), alt: `Diagrama del proceso ${codigo}` }] : [];
    },
    diagramasVisibles() {
      return this.diagramasProceso.filter(diagrama => this.diagramasCargados[diagrama.src]).slice(0, 1);
    },
    urlPdfProceso() {
      return (this.procesoSeleccionado && this.procesoSeleccionado.pdfUrl) || '#';
    },
    tienePdfProceso() {
      return !!(this.procesoSeleccionado && this.procesoSeleccionado.pdfUrl);
    },
    mostrarFichaCompleta() {
      return !!(this.procesoSeleccionado && this.procesoSeleccionado.codigo === 'E1');
    }
  },
  mounted() {
    this.cargarCatalogosNormatividad();
  },
  methods: {
    rutaProceso(proceso) {
      return proceso.url || '/mapa-procesos-2025/' + proceso.codigo;
    },
    rutaSubproceso(proceso, subproceso) {
      return subproceso.url || '/mapa-procesos-2025/' + proceso.codigo + '/' + subproceso.codigo;
    },
    indicadorAbierto(codigo) {
      return !!this.indicadoresAbiertos[codigo];
    },
    toggleIndicador(codigo) {
      this.$set(this.indicadoresAbiertos, codigo, !this.indicadoresAbiertos[codigo]);
    },
    async cargarCatalogosNormatividad() {
      try {
        const tipos = await axios.get('/api/tipodoc', { params: { 'orders[]': 'tip_description.asc' } });
        this.normatividad.tipos = this.listaRespuesta(tipos.data);
        this.cargarNormatividad();
      } catch (error) {
        this.normatividadError = 'No se pudo cargar el catálogo de normativa.';
      }
    },
    async cargarNormatividad(pagina = 1) {
      const proceso = this.procesoSeleccionado;

      this.normatividad.documentos = [];
      this.normatividad.total = 0;
      this.normatividad.pagina = pagina;
      this.normatividad.ultimaPagina = 1;
      this.normatividadError = '';
      if (!proceso) {
        return;
      }
      this.normatividadCargando = true;
      try {
        const response = await axios.get(`/api/process-regulations/${proceso.codigo}`, {
          params: {
            regulations_tipo: this.filtrosNormatividad.tipo || undefined,
            reg_year: this.filtrosNormatividad.anio || undefined,
            magic: this.filtrosNormatividad.texto || undefined,
            with: 'files',
            paginate: 20,
            page: pagina,
            'orders[]': 'reg_date.desc'
          }
        });
        const documentos = this.listaRespuesta(response.data)
          .map(documento => ({
            ...documento,
            files: Array.isArray(documento.files) ? documento.files : []
          }));
        this.normatividad.documentos = documentos;
        this.normatividad.pagina = Number(response.data.current_page || pagina);
        this.normatividad.ultimaPagina = Number(response.data.last_page || 1);
        this.normatividad.total = Number(response.data.total || documentos.length);
      } catch (error) {
        this.normatividadError = 'No se pudo cargar la normativa de este proceso.';
      } finally {
        this.normatividadCargando = false;
      }
    },
    listaRespuesta(respuesta) {
      return Array.isArray(respuesta) ? respuesta : (respuesta && Array.isArray(respuesta.data) ? respuesta.data : []);
    },
    limpiarNormatividad() {
      this.filtrosNormatividad = {
        tipo: '',
        anio: '',
        texto: ''
      };
      this.cargarNormatividad();
    },
    normalizarTipoNormativa(tipo) {
      return String(tipo || '').toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '').trim();
    },
    registrarDiagrama(src, cargado) {
      this.$set(this.diagramasCargados, src, cargado);
    },
    tipoNormativo(documento) {
      const tipo = this.normatividad.tipos.find(item => item.id === documento.regulations_tipo);
      return tipo ? tipo.tip_description : 'Documento normativo';
    },
    formatoFecha(fecha) {
      if (!fecha) {
        return 'Sin fecha';
      }
      const partes = fecha.split('-');
      return partes.length === 3 ? `${partes[2]}/${partes[1]}/${partes[0]}` : fecha;
    },
    descripcionNormativa(documento) {
      const descripcion = String(documento.reg_description || 'Sin descripción disponible.').replace(/\s+/g, ' ').trim();
      return descripcion.length > 280 ? `${descripcion.slice(0, 277)}...` : descripcion;
    },
    urlArchivoNormativo(archivo) {
      return `https://proyectos.regionhuanuco.gob.pe/regulations/file/${archivo.file_idregulation}/${archivo.file_tomo}/${archivo.file_nro_tipo}`;
    },
    archivoPrincipal(documento) {
      return documento.files.find(archivo => Number(archivo.file_tomo) === 0) || documento.files[0] || null;
    }
  },
  watch: {
    '$route.params.codigo'() {
      this.fichaAbierta = false;
      this.descripcionAbierta = false;
      this.indicadoresAbiertos = {};
      this.filtrosNormatividad = {
        tipo: '',
        anio: '',
        texto: ''
      };
      this.cargarNormatividad();
    }
  }
}
</script>

<style scoped>
.mapa-procesos {
  color: #22313f;
}

.mapa-toolbar {
  align-items: flex-start;
  display: flex;
  gap: 24px;
  justify-content: space-between;
  margin-bottom: 24px;
}

.mapa-toolbar h2 {
  font-size: 30px;
  font-weight: 700;
  margin: 0 0 8px;
}

.mapa-toolbar p {
  color: #5b6975;
  margin: 0;
}

.mapa-eyebrow {
  color: #1473a8 !important;
  font-size: 13px;
  font-weight: 700;
  margin-bottom: 4px !important;
  text-transform: uppercase;
}

.mapa-resumen {
  display: grid;
  gap: 8px;
  grid-template-columns: repeat(2, minmax(120px, 160px));
  justify-content: end;
  margin-top: 18px;
  min-width: 150px;
}

.mapa-resumen span {
  background: #ffffff;
  border: 1px solid #d9e2ea;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(30, 48, 64, .08);
  color: #506273;
  display: block;
  padding: 10px 14px;
}

.mapa-resumen strong {
  color: #172635;
  font-size: 22px;
  margin-right: 4px;
}

.mapa-nivel-cero {
  align-items: stretch;
  display: grid;
  gap: 18px;
  grid-template-columns: 96px minmax(0, 1fr) 96px;
}

.mapa-cuerpo {
  display: grid;
  gap: 34px;
}

.mapa-lateral {
  align-items: center;
  background: #ffffff;
  border: 2px solid #c7d2dc;
  border-radius: 8px;
  color: #1f2d3a;
  display: flex;
  font-size: 15px;
  font-weight: 700;
  justify-content: center;
  line-height: 1.35;
  padding: 14px 10px;
  text-align: center;
  text-transform: uppercase;
  writing-mode: vertical-rl;
}

.mapa-lateral-izq {
  transform: rotate(180deg);
}

.grupo-procesos {
  background: #ffffff;
  border: 2px solid;
  padding: 18px 26px 30px;
  position: relative;
}

.grupo-procesos h3 {
  font-size: 20px;
  font-weight: 800;
  margin: 0 0 14px;
  text-align: center;
  text-transform: uppercase;
}

.grupo-procesos.estrategico {
  border-color: #1587bd;
  clip-path: polygon(0 0, 100% 0, 100% 74%, 50% 100%, 0 74%);
}

.grupo-procesos.estrategico h3 {
  color: #0f76ac;
}

.grupo-procesos.misional {
  border-color: #c51f32;
  clip-path: polygon(0 0, 88% 0, 100% 50%, 88% 100%, 0 100%);
  padding-right: 15%;
}

.grupo-procesos.misional h3 {
  color: #b71d2d;
}

.grupo-procesos.apoyo {
  border-color: #188153;
  clip-path: polygon(0 16%, 50% 0, 100% 16%, 100% 100%, 0 100%);
  padding-top: 42px;
}

.grupo-procesos.apoyo h3 {
  color: #187448;
}

.procesos-grid {
  display: grid;
  gap: 12px;
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.procesos-grid.items-8 {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.proceso-card {
  align-items: stretch;
  background: #f8fbfd;
  border: 1px solid #ccd9e2;
  border-radius: 6px;
  color: #22313f;
  display: grid;
  grid-template-columns: 56px minmax(0, 1fr);
  min-height: 56px;
  overflow: hidden;
  text-decoration: none;
  transition: box-shadow .18s ease, transform .18s ease;
}

.proceso-card:hover {
  box-shadow: 0 8px 18px rgba(30, 48, 64, .18);
  color: #172635;
  text-decoration: none;
  transform: translateY(-2px);
}

.proceso-codigo {
  align-items: center;
  background: #ffffff;
  display: flex;
  font-size: 23px;
  font-weight: 800;
  justify-content: center;
}

.proceso-nombre {
  align-items: center;
  color: #ffffff;
  display: flex;
  font-size: 12px;
  font-weight: 800;
  justify-content: flex-start;
  line-height: 1.25;
  padding: 10px 12px;
  text-transform: uppercase;
}

.proceso-card.estrategico .proceso-codigo {
  color: #0f76ac;
}

.proceso-card.estrategico .proceso-nombre {
  background: #0f87bf;
}

.proceso-card.misional .proceso-codigo {
  color: #b71d2d;
}

.proceso-card.misional .proceso-nombre {
  background: #c51f32;
}

.proceso-card.apoyo .proceso-codigo {
  color: #187448;
}

.proceso-card.apoyo .proceso-nombre {
  background: #188153;
}

.btn-volver {
  color: #1268a0;
  display: inline-block;
  font-weight: 700;
  margin-bottom: 16px;
}

.detalle-encabezado {
  align-items: center;
  border-radius: 8px;
  color: #ffffff;
  display: grid;
  gap: 18px;
  grid-template-columns: 92px minmax(0, 1fr);
  margin-bottom: 20px;
  padding: 20px;
}

.detalle-encabezado.estrategico {
  background: #0f87bf;
}

.detalle-encabezado.misional {
  background: #c51f32;
}

.detalle-encabezado.apoyo {
  background: #188153;
}

.detalle-encabezado > span {
  align-items: center;
  background: rgba(255, 255, 255, .18);
  border: 2px solid rgba(255, 255, 255, .7);
  border-radius: 8px;
  display: flex;
  font-size: 32px;
  font-weight: 800;
  justify-content: center;
  min-height: 76px;
}

.detalle-encabezado p {
  font-weight: 800;
  margin: 0 0 4px;
  text-transform: uppercase;
}

.detalle-encabezado h2 {
  font-size: 28px;
  font-weight: 800;
  margin: 0;
}

.detalle-acciones {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 14px;
}

.detalle-acciones button,
.detalle-acciones a {
  background: #ffffff;
  border: 1px solid rgba(255, 255, 255, .8);
  border-radius: 6px;
  color: #1e566f;
  font-size: 14px;
  font-weight: 800;
  padding: 8px 13px;
  text-decoration: none;
}

.detalle-acciones a {
  background: transparent;
  color: #ffffff;
}

.detalle-acciones button:hover,
.detalle-acciones a:hover {
  box-shadow: 0 3px 10px rgba(0, 0, 0, .16);
  text-decoration: none;
}

.resumen-proceso {
  background: #ffffff;
  border: 1px solid #d6e1e8;
  border-left: 5px solid #0f87bf;
  display: grid;
  gap: 24px;
  grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
  margin-bottom: 24px;
  padding: 20px 22px;
}

.resumen-proceso span,
.normativa-resumen > div > span {
  color: #0f76ac;
  display: block;
  font-size: 13px;
  font-weight: 800;
  text-transform: uppercase;
}

.resumen-proceso p,
.resumen-proceso ul {
  color: #334655;
  line-height: 1.55;
  margin: 8px 0 0;
}

.resumen-proceso ul {
  padding-left: 18px;
}

.normativa-resumen {
  align-items: center;
  background: #ffffff;
  border: 1px solid #d6e1e8;
  border-left: 5px solid #159b66;
  display: grid;
  gap: 20px;
  grid-template-columns: minmax(230px, .65fr) minmax(0, 1.35fr);
  margin-top: 28px;
  padding: 20px 22px;
}

.normativa-resumen > div > span {
  color: #14784f;
}

.normativa-resumen h3 {
  color: #1e2d3a;
  font-size: 22px;
  font-weight: 800;
  margin: 4px 0 6px;
}

.normativa-columnas {
  border: 1px solid #d6e1e8;
  display: grid;
  grid-template-columns: minmax(160px, 1fr) minmax(0, 1.6fr) 110px;
}

.normativa-columnas span {
  background: #f5faf7;
  border-right: 1px solid #d6e1e8;
  color: #14784f;
  font-size: 13px;
  font-weight: 800;
  padding: 11px 14px;
  text-transform: uppercase;
}

.normativa-columnas span:last-child {
  border-right: 0;
  text-align: center;
}

.modal-ficha {
  align-items: flex-start;
  background: rgba(20, 32, 42, .68);
  display: flex;
  inset: 0;
  justify-content: center;
  overflow-y: auto;
  padding: 36px 18px;
  position: fixed;
  z-index: 1100;
}

.modal-ficha-contenido {
  background: #f5f8fa;
  box-shadow: 0 20px 48px rgba(0, 0, 0, .28);
  max-width: 1180px;
  padding: 20px;
  width: 100%;
}

.modal-ficha-barra {
  align-items: center;
  background: #263746;
  color: #ffffff;
  display: flex;
  justify-content: space-between;
  margin: -20px -20px 22px;
  padding: 14px 20px;
}

.modal-ficha-barra span,
.modal-ficha-barra strong {
  display: block;
}

.modal-ficha-barra span {
  font-size: 12px;
  font-weight: 800;
  text-transform: uppercase;
}

.modal-ficha-barra strong {
  font-size: 18px;
}

.modal-ficha-barra button {
  background: transparent;
  border: 0;
  color: #ffffff;
  font-size: 28px;
  line-height: 1;
  padding: 4px 8px;
}

.subproceso-detalle {
  background: #ffffff;
  border: 1px solid #d8e2ea;
  border-left: 6px solid #2b6f9f;
  border-radius: 8px;
  margin-bottom: 20px;
  padding: 16px 18px;
}

.subproceso-detalle span {
  color: #2b6f9f;
  font-weight: 800;
}

.subproceso-detalle h3 {
  font-size: 22px;
  font-weight: 700;
  margin: 6px 0 0;
}

.nivel-uno-lista h3 {
  font-size: 22px;
  font-weight: 800;
  margin-bottom: 14px;
}

.ficha-proceso,
.descripcion-proceso,
.indicadores-proceso {
  margin-bottom: 22px;
}

.ficha-titulo,
.acordeon-titulo,
.indicadores-proceso h3 {
  background: #5d6a72;
  border: 0;
  color: #ffffff;
  display: block;
  font-size: 17px;
  font-weight: 800;
  margin: 0;
  padding: 10px 14px;
  text-align: center;
  text-transform: uppercase;
  width: 100%;
}

.acordeon-titulo,
.indicador-head {
  cursor: pointer;
}

.acordeon-titulo {
  align-items: center;
  display: flex;
  justify-content: center;
  position: relative;
}

.acordeon-titulo span:last-child {
  font-size: 22px;
  position: absolute;
  right: 14px;
  top: 5px;
}

.ficha-grid,
.indicador-grid {
  background: #ffffff;
  border: 1px solid #c9d4dc;
  display: grid;
  grid-template-columns: 170px minmax(0, 1fr) 150px minmax(0, 1fr);
}

.ficha-grid > div,
.indicador-grid > div {
  border-bottom: 1px solid #d8e0e6;
  border-right: 1px solid #d8e0e6;
  padding: 9px 12px;
}

.ficha-label {
  background: #0f87bf;
  color: #ffffff;
  font-weight: 800;
}

.ficha-full {
  grid-column: span 3;
}

.ficha-grid ul,
.descripcion-tabla ul,
.indicador-grid ul {
  margin: 0;
  padding-left: 18px;
}

.descripcion-tabla {
  background: #ffffff;
  border-left: 1px solid #c9d4dc;
  border-top: 1px solid #c9d4dc;
  display: grid;
  font-size: 13px;
  grid-template-columns: 1fr 1fr 70px 1fr 1.2fr 1.3fr 1.3fr;
}

.descripcion-tabla > div {
  border-bottom: 1px solid #c9d4dc;
  border-right: 1px solid #c9d4dc;
  padding: 8px;
}

.descripcion-head {
  background: #0f87bf;
  color: #ffffff;
  font-weight: 800;
  text-align: center;
}

.descripcion-codigo {
  color: #0f76ac;
  font-weight: 800;
  text-align: center;
}

.indicador-card {
  background: #ffffff;
  border: 1px solid #c9d4dc;
  margin-top: 16px;
}

.indicador-head {
  align-items: center;
  border: 0;
  background: #eef8fd;
  color: #22313f;
  display: grid;
  gap: 12px;
  grid-template-columns: 130px minmax(0, 1fr) 32px;
  padding: 12px 14px;
  text-align: left;
  width: 100%;
}

.indicador-head span {
  color: #0f76ac;
  font-size: 18px;
  font-weight: 800;
}

.indicador-head h4 {
  font-size: 18px;
  font-weight: 800;
  margin: 0;
}

.indicador-head em {
  color: #0f76ac;
  font-size: 24px;
  font-style: normal;
  font-weight: 800;
  line-height: 1;
  text-align: right;
}

.indicador-grid {
  grid-template-columns: 170px minmax(0, 1fr) 150px minmax(0, 1fr);
}

.logros-grid {
  display: grid;
  grid-template-columns: repeat(6, minmax(0, 1fr));
}

.logro-item {
  border-right: 1px solid #d8e0e6;
  padding: 10px;
  text-align: center;
}

.logro-item span {
  color: #657786;
  display: block;
  font-size: 12px;
}

.logro-item strong,
.logro-item em {
  display: block;
  font-style: normal;
  font-weight: 800;
}

.nivel-uno-grid {
  display: grid;
  gap: 10px;
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.nivel-uno-item {
  align-items: center;
  background: #ffffff;
  border: 1px solid #d5e0e8;
  border-radius: 8px;
  color: #263746;
  display: grid;
  gap: 12px;
  grid-template-columns: 76px minmax(0, 1fr);
  min-height: 64px;
  padding: 10px 14px;
  text-decoration: none;
}

.nivel-uno-item:hover,
.nivel-uno-item.activo {
  border-color: #2b6f9f;
  box-shadow: 0 6px 14px rgba(30, 48, 64, .12);
  color: #172635;
  text-decoration: none;
}

.nivel-uno-item span {
  color: #2b6f9f;
  font-size: 18px;
  font-weight: 800;
}

.nivel-uno-item strong {
  font-size: 15px;
  line-height: 1.35;
}

.normatividad-proceso {
  margin-top: 28px;
}

.normatividad-head {
  align-items: center;
  background: #ffffff;
  border: 1px solid #d6e1e8;
  border-left: 6px solid #159b66;
  border-radius: 8px 8px 0 0;
  display: flex;
  justify-content: space-between;
  padding: 18px 20px;
}

.normatividad-head span {
  color: #159b66;
  display: block;
  font-size: 12px;
  font-weight: 800;
  letter-spacing: .04em;
  text-transform: uppercase;
}

.normatividad-head h3 {
  color: #1e2d3a;
  font-size: 24px;
  font-weight: 800;
  margin: 3px 0 0;
}

.normatividad-head strong {
  background: #eaf8f1;
  border: 1px solid #bfe7d2;
  border-radius: 999px;
  color: #14784f;
  font-size: 13px;
  padding: 7px 12px;
  white-space: nowrap;
}

.normatividad-panel {
  background: #ffffff;
  border: 1px solid #d6e1e8;
  border-top: 0;
  border-radius: 0 0 8px 8px;
  box-shadow: 0 8px 20px rgba(30, 48, 64, .08);
  padding: 20px;
}

.normatividad-filtros {
  align-items: end;
  display: grid;
  gap: 16px;
  grid-template-columns: minmax(210px, 1fr) 160px minmax(320px, 1.6fr);
  margin-bottom: 18px;
}

.normatividad-filtros label {
  display: grid;
  gap: 8px;
  margin: 0;
}

.normatividad-filtros label > span {
  color: #1f2d3a;
  font-weight: 800;
}

.normatividad-filtros select,
.normatividad-filtros input {
  background: #ffffff;
  border: 1px solid #b8cbc2;
  border-radius: 6px;
  color: #176e4d;
  min-height: 46px;
  padding: 0 12px;
  width: 100%;
}

.normatividad-busqueda {
  margin: 0;
}

.normatividad-busqueda > div {
  display: grid;
  grid-template-columns: minmax(0, 1fr) 92px 92px;
}

.normatividad-busqueda input {
  border-radius: 6px 0 0 6px;
}

.normatividad-busqueda button {
  border: 0;
  color: #ffffff;
  font-size: 13px;
  font-weight: 800;
  min-height: 46px;
}

.btn-buscar { background: #14784f; }
.btn-limpiar { background: #08b9d6; border-radius: 0 6px 6px 0; }

.documentos-lista {
  border: 1px solid #d9e2ea;
  border-radius: 8px;
  overflow: hidden;
}

.documento-item {
  align-items: stretch;
  display: grid;
  grid-template-columns: minmax(0, 1fr) 132px;
}

.documento-item + .documento-item {
  border-top: 1px solid #d9e2ea;
}

.documento-main {
  padding: 18px 20px;
}

.documento-kicker {
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 8px;
}

.documento-kicker span {
  background: #eef6fb;
  border: 1px solid #cfe3ef;
  border-radius: 999px;
  color: #1268a0;
  font-size: 12px;
  font-weight: 800;
  padding: 5px 9px;
}

.documento-kicker .documento-relacion {
  background: #fff4df;
  border-color: #efd29d;
  color: #8b5a00;
}

.documento-kicker strong {
  color: #627181;
  font-size: 13px;
}

.documento-main h4 {
  color: #172635;
  font-size: 18px;
  font-weight: 800;
  margin: 0 0 8px;
}

.documento-main p {
  color: #415363;
  line-height: 1.55;
  margin: 0;
}

.documento-archivo {
  align-items: center;
  background: #f8fbfd;
  border-left: 1px solid #d9e2ea;
  color: #22313f;
  display: flex;
  flex-direction: column;
  gap: 8px;
  justify-content: center;
  padding: 14px;
  text-align: center;
  text-decoration: none;
}

.documento-archivo:hover {
  background: #eef8f5;
  color: #14784f;
  text-decoration: none;
}

.archivo-pdf {
  color: #d9272e;
  display: inline-flex;
  font-size: 34px;
  line-height: 1;
  padding: 8px;
  text-decoration: none;
}

.archivo-pdf:hover,
.archivo-pdf:focus {
  color: #a80d19;
  text-decoration: none;
}

.documento-archivo em {
  color: #536473;
  font-style: normal;
  font-weight: 700;
}

.documentos-vacio {
  color: #657786;
  padding: 22px;
  text-align: center;
}

.normatividad-paginacion {
  align-items: center;
  display: flex;
  gap: 12px;
  justify-content: flex-end;
  margin-top: 16px;
}

.normatividad-paginacion button {
  background: #14784f;
  border: 1px solid #14784f;
  border-radius: 6px;
  color: #ffffff;
  font-weight: 800;
  min-height: 36px;
  padding: 0 12px;
}

.normatividad-paginacion button:disabled {
  background: #e6ece8;
  border-color: #d7e0da;
  color: #718078;
  cursor: not-allowed;
}

.normatividad-paginacion span {
  color: #536473;
  font-size: 13px;
  font-weight: 700;
}

.diagramas-proceso {
  display: grid;
  gap: 16px;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  margin-top: 28px;
}

.diagramas-precarga {
  height: 0;
  overflow: hidden;
  width: 0;
}

.diagramas-precarga img {
  height: 1px;
  width: 1px;
}

.diagramas-proceso a {
  border: 1px solid #d6e1e8;
  display: block;
}

.diagramas-proceso img {
  display: block;
  height: auto;
  width: 100%;
}

@media (max-width: 991.98px) {
  .mapa-toolbar {
    display: block;
  }

  .mapa-resumen {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    justify-content: stretch;
    margin-top: 16px;
  }

  .mapa-nivel-cero {
    grid-template-columns: minmax(0, 1fr);
  }

  .mapa-lateral {
    min-height: auto;
    writing-mode: horizontal-tb;
  }

  .mapa-lateral-izq {
    transform: none;
  }

  .procesos-grid,
  .procesos-grid.items-8,
  .nivel-uno-grid,
  .logros-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .ficha-grid,
  .indicador-grid,
  .descripcion-tabla {
    display: block;
  }

  .resumen-proceso {
    grid-template-columns: minmax(0, 1fr);
  }

  .descripcion-head {
    display: none;
  }

  .documento-item {
    grid-template-columns: minmax(0, 1fr);
  }

  .normatividad-paginacion {
    justify-content: space-between;
  }

  .normatividad-filtros {
    grid-template-columns: minmax(0, 1fr);
  }

  .documento-archivo {
    border-left: 0;
    border-top: 1px solid #d9e2ea;
  }
}

@media (max-width: 575.98px) {
  .mapa-toolbar h2 {
    font-size: 24px;
  }

  .procesos-grid,
  .procesos-grid.items-8,
  .nivel-uno-grid,
  .logros-grid {
    grid-template-columns: minmax(0, 1fr);
  }

  .detalle-encabezado {
    grid-template-columns: minmax(0, 1fr);
  }

  .detalle-encabezado h2 {
    font-size: 22px;
  }

  .normativa-resumen {
    grid-template-columns: minmax(0, 1fr);
  }

  .normativa-columnas {
    grid-template-columns: minmax(0, 1fr);
  }

  .normativa-columnas span,
  .normativa-columnas span:last-child {
    border-bottom: 1px solid #d6e1e8;
    border-right: 0;
    text-align: left;
  }

  .normativa-columnas span:last-child {
    border-bottom: 0;
  }

  .modal-ficha {
    padding: 14px 8px;
  }

  .modal-ficha-contenido {
    padding: 14px;
  }

  .modal-ficha-barra {
    margin: -14px -14px 18px;
    padding: 12px 14px;
  }

  .normatividad-head {
    align-items: flex-start;
    display: grid;
    gap: 12px;
  }

}
</style>
