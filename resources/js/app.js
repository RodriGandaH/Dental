import "./bootstrap";
import "../css/app.css";
// Import de estilos de Bootstrap 5 y Datatables
import "bootstrap/dist/css/bootstrap.min.css";
import "datatables.net-bs5/css/dataTables.bootstrap5.min.css";

// Import de scripts de Bootstrap 5 y Datatables
import "bootstrap/dist/js/bootstrap.bundle.min.js";
import "datatables.net-bs5/js/dataTables.bootstrap5.min.js";

// Import de la extensión Responsive
import "datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css";
import "datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import $ from "jquery";
import "datatables.net-bs5";
import "datatables.net-responsive-bs5";

$(document).ready(function () {
    $("#tablaPacientes").DataTable({
        responsive: true,
        autoWidth: false,
        language: {
            lengthMenu: "Mostrar _MENU_ registros por página",
            zeroRecords: "Nada encontrado - disculpa",
            info: "Mostrando página _PAGE_ de _PAGES_",
            infoEmpty: "",
            infoFiltered: "(filtrado de _MAX_ registros totales)",
            search: "Buscar",
            paginate: {
                next: "Siguiente",
                previous: "Atras",
            },
        },
    });
    $("#tablaTratamientos").DataTable({
        responsive: true,
        autoWidth: false,
        language: {
            lengthMenu: "Mostrar _MENU_ registros por página",
            zeroRecords: "Nada encontrado - disculpa",
            info: "Mostrando página _PAGE_ de _PAGES_",
            infoEmpty: "",
            infoFiltered: "(filtrado de _MAX_ registros totales)",
            search: "Buscar",
            paginate: {
                next: "Siguiente",
                previous: "Atras",
            },
        },
    });
});
