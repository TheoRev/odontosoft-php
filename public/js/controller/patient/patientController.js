$(document).ready(function() {
    // alert("Loading...")
    var url_1 = "http://192.168.1.33/odontosoft-php/api/patient_api.php";
    var url_2 = "http://localhost/odontosoft-php/api/patient_api.php";
    var url_3 = "http://localhost:3030/api/patients/";

    // var patients = null;

    $(function() {
        $("#tblPatients").puidatatable({
            caption: "Lista de Pacientes",
            paginator: {
                rows: 10
            },
            selectionMode: 'single',
            responsive: true,
            columns: [
                { field: "id", headerText: "ID", bodyClass: "cell-content", headerClass: "header-table-small" },
                {
                    field: "date_init",
                    headerText: "Fec. Ingr.",
                    pattern: "dd/MM/yyyy",
                    content: function(p) {
                        return setFormatDate(p.date_init);
                    },
                    headerClass: "header-date"
                },
                { field: "nom_ape", headerText: "Nombres y Ape.", filter: true, sortable: true },
                { field: "age", headerText: "Edad", bodyClass: "cell-content", headerClass: "header-table-small" },
                { field: "sex", headerText: "Sexo", bodyClass: "cell-content", headerClass: "header-table-small" },
                {
                    field: "date_nac",
                    headerText: "Fec. Nac.",
                    content: function(p) { return setFormatDate(p.date_nac); },
                    headerClass: "header-date"
                },
                {
                    field: "diabettes",
                    headerText: "Diabts.",
                    headerClass: "header-enf",
                    bodyClass: "cell-content",
                    content: function(p) { return getStateEnfermedad(p.diabettes); }
                },
                {
                    field: "hipertension",
                    headerText: "Hiper.",
                    headerClass: "header-enf",
                    bodyClass: "cell-content",
                    content: function(p) { return getStateEnfermedad(p.hipertension); }
                },
                // {
                //     field: "",
                //     headerText: "",
                //     hidden: false,
                //     headerClass: "header-action",
                //     bodyClass: "cell-content",
                //     content: function(p) {
                //         setButtonStyle();
                //         // return $(
                //         //     "<button class='btnUpdate' type='button' onClick='modifyPatient(" + p + ")'></button>"
                //         //     // $('.btnUpdate').puibutton({
                //         //     //     icon: 'fa fa-pencil'
                //         //     // })
                //         // );
                //         return $("<button class='btnModificar' onClck='modifyPatient(" + p + ")' title='Modificar'><i class='fa fa-pencil' aria-hidden='true'></i></button>&nbsp;&nbsp;" +
                //             "<button class='btn btn-danger btn-crud' title='Eliminar'><i class='fa fa-trash-o' aria-hidden='true'></i></button>");
                //     }
                // }
            ],
            datasource: function(callback) {
                $.ajax({
                    type: "GET",
                    url: "http://localhost/odontosoft-php/api/patient_api.php",
                    data: {
                        opt: "all"
                    },
                    dataType: "json",
                    context: this,
                    success: function(response) {
                        let patients;
                        for (let i = 0; i < response.length; i++) {
                            // console.log(response[i]);
                        }
                        callback.call(this, response);
                    }
                });
            }
        });
    });
});

function setFormatDate(fec) {
    return moment(fec).format('DD/MM/YYYY');
}

function getStateEnfermedad(enf) {
    if (enf) {
        return $("<i class='fa fa-check aria-hidden='true'></i>");
    } else {
        return $("<i class='fa fa-times aria-hidden='true'></i>");
    }
}

$("#btnModificar").click(function() {
    alert("Modificando paciente: " + p.nom_ape);
});

function modifyPatient(p) {
    alert("Modificando paciente: " + p.nom_ape);
}

function setButtonStyle() {
    $('.btnUpdate').puibutton({
        icon: 'fa fa-pencil'
    });
}