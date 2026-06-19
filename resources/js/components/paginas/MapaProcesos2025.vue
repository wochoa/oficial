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
      <div class="mapa-toolbar">
        <div>
          <p class="mapa-eyebrow">GOREHCO {{ mapa.version }}</p>
          <h2>{{ mapa.titulo }}</h2>
          <p>{{ mapa.subtitulo }}</p>
        </div>
        <div class="mapa-resumen">
          <span><strong>{{ mapa.resumen.nivel0 }}</strong> Nivel 0</span>
          <span><strong>{{ mapa.resumen.nivel1 }}</strong> Nivel 1</span>
        </div>
      </div>

      <div v-if="!procesoSeleccionado" class="mapa-nivel-cero">
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

      <div v-else class="detalle-proceso">
        <router-link to="/mapa-procesos-2025" class="btn-volver">
          Volver al mapa
        </router-link>

        <div :class="['detalle-encabezado', grupoSeleccionado.clase]">
          <span>{{ procesoSeleccionado.codigo }}</span>
          <div>
            <p>{{ grupoSeleccionado.titulo }}</p>
            <h2>{{ procesoSeleccionado.nombre }}</h2>
          </div>
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
            <div class="ficha-full">
              <ul>
                <li v-for="item in procesoSeleccionado.ficha.dueno" :key="item">{{ item }}</li>
              </ul>
            </div>

            <div class="ficha-label">Objetivo estrategico</div>
            <div class="ficha-full">
              <ul>
                <li v-for="item in procesoSeleccionado.ficha.objetivoEstrategico" :key="item">{{ item }}</li>
              </ul>
            </div>
          </div>
        </section>

        <section v-if="procesoSeleccionado.descripcion" class="descripcion-proceso">
          <h3>Descripcion del Proceso</h3>
          <div class="descripcion-tabla">
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
              v-for="item in procesoSeleccionado.nivel1"
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
            <div class="indicador-head">
              <span>{{ indicador.codigo }}</span>
              <h4>{{ indicador.nombre }}</h4>
            </div>
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
        </section>
      </div>
    </div>
  </div>
</template>

<script>
import mapa from '../../data/mapa-procesos-2025.json';

export default {
  name: 'MapaProcesos2025',
  data() {
    return {
      mapa
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

      return this.procesoSeleccionado.nivel1.find(item => {
        return item.codigo === this.$route.params.subcodigo;
      }) || null;
    }
  },
  methods: {
    rutaProceso(proceso) {
      return proceso.url || '/mapa-procesos-2025/' + proceso.codigo;
    },
    rutaSubproceso(proceso, subproceso) {
      return subproceso.url || '/mapa-procesos-2025/' + proceso.codigo + '/' + subproceso.codigo;
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
  gap: 22px;
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
  border-radius: 8px;
  padding: 16px;
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
}

.grupo-procesos.estrategico h3 {
  color: #0f76ac;
}

.grupo-procesos.misional {
  border-color: #c51f32;
}

.grupo-procesos.misional h3 {
  color: #b71d2d;
}

.grupo-procesos.apoyo {
  border-color: #188153;
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
  border-radius: 8px;
  color: #22313f;
  display: grid;
  grid-template-columns: 56px minmax(0, 1fr);
  min-height: 72px;
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
  font-size: 22px;
  font-weight: 800;
  justify-content: center;
}

.proceso-nombre {
  align-items: center;
  color: #ffffff;
  display: flex;
  font-size: 13px;
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
.descripcion-proceso h3,
.indicadores-proceso h3 {
  background: #5d6a72;
  color: #ffffff;
  font-size: 17px;
  font-weight: 800;
  margin: 0;
  padding: 10px 14px;
  text-align: center;
  text-transform: uppercase;
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
  background: #eef8fd;
  display: grid;
  gap: 12px;
  grid-template-columns: 130px minmax(0, 1fr);
  padding: 12px 14px;
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

@media (max-width: 991.98px) {
  .mapa-toolbar {
    display: block;
  }

  .mapa-resumen {
    grid-template-columns: repeat(2, minmax(0, 1fr));
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

  .descripcion-head {
    display: none;
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
}
</style>
