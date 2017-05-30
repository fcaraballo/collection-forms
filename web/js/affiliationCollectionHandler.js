var $collectionHolder;

var $addTagLink = $('<a href="#" type="button" class="add_affiliation_link btn btn-info">Add Affiliations</a>');
var $newLinkLi = $('<li></li>').append($addTagLink);

jQuery(document).ready(function() {
    $collectionHolder = $('ul.affiliations');

    $collectionHolder.find('li').each(function() {
        addTagFormDeleteLink($(this));
    });

    $collectionHolder.append($newLinkLi);

    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addTagLink.on('click', function(e) {
        e.preventDefault();

        addTagForm($collectionHolder, $newLinkLi);
    });
});

function addTagForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');
    var index     = $collectionHolder.data('index');
    var newForm   = prototype.replace(/__name__/g, index);

    $collectionHolder.data('index', index + 1);

    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);

    addTagFormDeleteLink($newFormLi);
}

function addTagFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#" class="btn btn-danger" style="float: right;">Delete this Affiliation</a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function(e) {
        e.preventDefault();

        $tagFormLi.remove();
    });
}