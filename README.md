# Tarea - Desarrollo en Plataformas

**Estudiante:** Martín Alejandro Herrera Pacheco  
**Fecha:** 2025/12/16  
**Paralelo:** Quinto Semestre – P9932

---

## Mis Decisiones de Diseño

### 1. Tabla

**Nombre de la tabla:** `Vehiculos`

**Campos:**

| Campo         | Tipo            | ¿Obligatorio? |
|--------------|-----------------|---------------|
| id           | Bigint (integer) | Sí            |
| placa        | VARCHAR(10)      | Sí            |
| tipo         | VARCHAR(20)      | Sí            |
| propietario  | VARCHAR(100)     | No            |
| observaciones| TEXT            | No            |
| estado       | CHAR(10)         | Sí            |

---

### 2. Tipos de vehículo

Los tipos de vehículos registrados son los siguientes: Automóvil, Motocicleta y Camioneta.

---

### 3. ¿Se puede eliminar registros?

**Respuesta:** No, no se puede eliminar registros.

**Razón (1 línea):**  
Es para mantener un historial de vehículos que visitaron el parqueadero para seguridad del dueño.
