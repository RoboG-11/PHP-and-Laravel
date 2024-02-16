// Generar opciones para los días (1 al 31)
export const daysOptions = Array.from({ length: 31 }, (_, index) => index + 1).map(
  (day) => (
    <option key={day} value={day}>
      {day}
    </option>
  )
);

// Meses en formato texto para las opciones del campo de mes
export const monthsOptions = [
  { value: "01", label: "January" },
  { value: "02", label: "February" },
  { value: "03", label: "March" },
  { value: "04", label: "April" },
  { value: "05", label: "May" },
  { value: "06", label: "June" },
  { value: "07", label: "July" },
  { value: "08", label: "August" },
  { value: "09", label: "September" },
  { value: "10", label: "October" },
  { value: "11", label: "November" },
  { value: "12", label: "December" },
].map((month) => (
  <option key={month.value} value={month.value}>
    {month.label}
  </option>
));

// Generar opciones para los años (desde 1900 hasta el año actual)
const currentYear = new Date().getFullYear();
export const yearsOptions = Array.from(
  { length: currentYear - 1899 },
  (_, index) => currentYear - index
).map((year) => (
  <option key={year} value={year}>
    {year}
  </option>
));

export const formatTime = (time) => {
  const [hours, minutes] = time.split(":");
  // Agrega lógica aquí para ajustar el formato si es necesario
  return `${hours}:${minutes}:00`;
};