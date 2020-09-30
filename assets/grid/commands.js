function gridSelectionChange(e) {
    var dataItem, btns, i;
    var selectedRows = this.select();
    if (selectedRows.length > 0) {
        if (selectedRows.length == 1) {
            dataItem = this.dataItem(selectedRows[0]);
            if (dataItem) {
                btns = e.sender.element.find('[data-item="true"]');
                btns.css('display','inline-flex');
                btns.each(function(i, item) {
                    var btn = $(item);
                    var htpl = btn.data("href");
                    var re = /%s/g;
                    btn.attr("href", htpl.replace(re, dataItem.id))
                });

                btns = e.sender.element.find('[data-item="multi"]');
                btns.css('display','inline-flex');
                btns.each(function(i, item) {
                    var btn = $(item);
                    var htpl = btn.data("href");
                    var re = /%s/g;
                    btn.attr("href", htpl.replace(re, dataItem.id))
                });

                return;
            }
        } else {
            var ids = "";
            for (i = 0; i < selectedRows.length; i++) {
                dataItem = this.dataItem(selectedRows[i]);
                if (dataItem) {
                    if (ids) ids += "|";
                    ids += dataItem.id
                }
            }

            e.sender.element.find('[data-item="true"]').css('display','none');
            btns = e.sender.element.find('[data-item="multi"]');
            btns.css('display','inline-flex');
            btns.each(function(i, item) {
                var btn = $(item);
                var htpl = btn.data("href");
                var re = /%s/g;
                btn.attr("href", htpl.replace(re, ids))
            });

            return;
        }

    }

    e.sender.element.find('[data-item="true"]').css('display','none');
    e.sender.element.find('[data-item="multi"]').css('display','none');
}

function gridDataBound(e) {
    e.sender.element.find('[data-item="true"]').css('display','none');
    e.sender.element.find('[data-item="multi"]').css('display','none');
}

