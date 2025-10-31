$(document).ready(function(){

    if ($('#frmStoreMainMenu').length > 0) {
        let rules = {
            name: {
                required: true,
                maxlength: 253
            }
        };
        PX.ajaxRequest({
            element: 'frmStoreMainMenu',
            validation: true,
            script: 'admin/menu-management/main-menu',
            rules,
            afterSuccess: {
                type: 'inflate_reset_response_data',
            }
        });
    }

    if ($('#frmUpdateMainMenu').length > 0) {
        let rules = {
            name: {
                required: true,
                maxlength: 253
            },
            status: {
                required: true,
                maxlength: 253
            }
        };
        PX.ajaxRequest({
            element: 'frmUpdateMainMenu',
            validation: true,
            script: 'admin/menu-management/main-menu/'+$("#patch_id").val(),
            rules,
            afterSuccess: {
                type: 'inflate_response_data',
            }
        });
    }

    if ($("#dtMainMenu").length > 0) {
        const {pageLang={}} = PX?.config;
        const {table={}} = pageLang;
        let col_draft = [
            {
                data: 'id',
                title: table?.id
            },
            /*{
                data: null,
                title: table?.serial,
                class: 'text-center',
                width: '200px',
                render: function (data, type, row) {
                    return `<input type="number" value="` + data.serial + `" class="form-control serial"><input type="hidden" value="` + data.id + `" class="form-control ids">`;
                }
            },*/
            {
                data: 'name',
                title: table?.name
            },

            {
                data: 'created_at',
                title: table?.created
            },

            {
                data: null,
                title: table?.action,
                class: 'text-end',
                render: function (data, type, row) {
                    return `<a href="${baseurl}admin/menu-management/main-menu/${data.id}/edit" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <i class="fas fa-pencil-alt"></i>
                    </a>`;
                }
            },
        ];
        PX.renderDataTable('dtMainMenu', {
            select: true,
            url: 'admin/menu-management/main-menu/list',
            columns: col_draft,
            pdf: [1, 2]
        });
    }
})

function dtMainMenu(table, api, op) {
    PX.deleteAll({
        element: "deleteAllMainMenu",
        script: "admin/menu-management/main-menu/delete-list",
        confirm: true,
        api,
    });
    PX.updateAll({
        element: "updateAllMainMenu",
        script: "admin/menu-management/main-menu/update-list",
        confirm: true,
        dataCols: {
            key: "ids",
            items: [
                {
                    index: 1,
                    name: "ids",
                    type: "input",
                    data: [],
                },
                {
                    index: 1,
                    name: "serial",
                    type: "input",
                    data: []
                }
            ]
        },
        api,
        afterSuccess: {
            type: "inflate_response_data"
        }
    });
    PX?.dowloadPdf({ ...op, btn: "downloadMainMenuPdf", dataTable: "yes" })
    PX?.dowloadExcel({ ...op, btn: "downloadMainMenuExcel", dataTable: "yes" })
}
