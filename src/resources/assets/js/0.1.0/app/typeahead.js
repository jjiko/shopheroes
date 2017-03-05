var $ = require('jquery');
require('../../vendor/typeahead.bundle.js');
var Bloodhound = require('bloodhound-js');
// instantiate the bloodhound suggestion engine
var jqxhr = $.get('/g/shop-heroes/db/all.json', function(data){
    var items = new Bloodhound({
        datumTokenizer: function (d) {
            return Bloodhound.tokenizers.whitespace(d.n);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        limit: 24,
        initialize: true,
        local: data.items.items
    });

    $('.typeahead').typeahead({
            highlight: true
        },
        {
            displayKey: 'n',
            source: items.ttAdapter(),
            templates: {
                header: '<div class="col-sm-12"><h3 class="table-name"><a href="/g/shop-heroes/db/items">Items</a></h3></div>',
                suggestion: function (data) {
                    return ['<div class="col-sm-12"><p>', data.n, '<br><em>', data.d, '</em></p></div>'].join('\n');
                },
                footer: ''
            }
        })
        .on('typeahead:selected', function (event, data, dataset) {
            window.location.href = data.l;
        });
});
// public
module.exports = {
    init: function () {
    }
}