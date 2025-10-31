$(document).ready(function(){

    if ($('#frmStoreSubMenu').length > 0) {
        let rules = {
            name: {
                required: true,
                maxlength: 253
            },
            main_menu_id: {
                required: true,
                maxlength: 253
            }
        };
        PX.ajaxRequest({
            element: 'frmStoreSubMenu',
            validation: true,
            script: 'admin/menu-management/sub-menu',
            rules,
            afterSuccess: {
                type: 'inflate_reset_response_data',
            }
        });
    }

    if ($('#frmUpdateSubMenu').length > 0) {
        let rules = {
            name: {
                required: true,
                maxlength: 253
            },
            main_menu_id: {
                required: true,
                maxlength: 253
            },
            status: {
                required: true,
                maxlength: 253
            }
        };
        PX.ajaxRequest({
            element: 'frmUpdateSubMenu',
            validation: true,
            script: 'admin/menu-management/sub-menu/'+$("#patch_id").val(),
            rules,
            afterSuccess: {
                type: 'inflate_response_data',
            }
        });
    }

    if ($("#dtSubMenu").length > 0) {
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
                data: 'parent.name',
                title: table?.main_menu_id
            },
            {
                data: 'name',
                title: table?.name
            },

            {
                data: 'created_at',
                title: table?.created
            },
            {
                data: 'status',
                title: table?.status
            },
            {
                data: null,
                title: table?.action,
                class: 'text-end',
                render: function (data, type, row) {
                    return `<a href="${baseurl}admin/menu-management/sub-menu/${data.id}/edit" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <i class="fas fa-pencil-alt"></i>
                    </a>`;
                }
            },
        ];
        PX.renderDataTable('dtSubMenu', {
            select: true,
            url: 'admin/menu-management/sub-menu/list',
            columns: col_draft,
            pdf: [1, 2]
        });
    }
})

function dtSubMenu(table, api, op) {
    PX.deleteAll({
        element: "deleteAllSubMenu",
        script: "admin/menu-management/sub-menu/delete-list",
        confirm: true,
        api,
    });
    PX.updateAll({
        element: "updateAllSubMenu",
        script: "admin/menu-management/sub-menu/update-list",
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
    PX?.dowloadPdf({ ...op, btn: "downloadSubMenuPdf", dataTable: "yes" })
    PX?.dowloadExcel({ ...op, btn: "downloadSubMenuExcel", dataTable: "yes" })
}
