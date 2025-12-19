# Examen - Desarrollo en Plataformas

**Estudiante:** Martín Alejandro Herrera Pacheco  
**Fecha:** 2025/12/19  
**Paralelo:** Quinto Semestre – P9932

---

## Mis Decisiones de Diseño

### 1. Tabla

**Nombre de la tabla:** `Citas`

**Campos:**

| Campo               | Tipo             | ¿Obligatorio? |
|---------------------|------------------|---------------|
| id                  | Bigint (integer) | Sí            |
| nombre_clienta      | VARCHAR(50)      | Sí            |
| telefono_clienta    | VARCHAR(10)      | Sí            |
| servicio_solicitado | VARCHAR(30)      | Si            |
| fecha_cita          | TIMESTAMP        | Si            |
| estado_cita         | VARCHAR(3)       | Si            |
| fecha_asignada      | TIMESTAMP        | Sí            |

---

### 2. Estados de Servicio

Los estados de servicio son: PENDIENTE, YA VINO, CANCELO

---

### 3. ¿Se puede eliminar registros?

**Respuesta:** No, no se puede eliminar registros.

**Razón (1 línea):**  
Es para mantener un historial de citas atendidas en la peluqueria con el objetivo de tener trazabilidad ante cualquier reclamo.

### 4. Link de GitHub
https://github.com/maherrerap/examen-HerreraMartin-Peluqueria.git
