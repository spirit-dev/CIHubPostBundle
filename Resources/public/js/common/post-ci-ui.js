// Global var representing ProjectManipulator object
var projectManipulator = new PostProjectManipulator();

/**
 * JQuery function called at doc Ready
 */
$(document).ready(function () {
    projectWatch();
    buttonsBinding();
});

/**
 * Standalone function sends newDiffList Request
 */
function newDiffListFormAction() {
    var diffListName = $("#difflistname").val();
    var project = projectManipulator.getCurrentProject();
    console.log('Gonna create a new DiffList named : ' + diffListName + ' for project : ' + project.id + ' - ' + project.name);

    function newDiffListDone() {
        console.log('post ci done');
    };
    function newDiffListFail() {
        console.log('post ci fail');
    };

    var req = new requestManager({
            url: ROUTES.post.difflist.new,
            type: 'POST',
            dataType: 'json',
            async: false,
            data: {
                'diffListName': diffListName
            }
        }, newDiffListDone, newDiffListFail);
    console.log(req.getResult());
}

function buttonsBinding() {
    $('#newDiffList').popover();
}

/**
 * Function called to define action on each available project
 */
function projectWatch() {
    // Click définition
    $('.postci-project').click(function () {
        removeAllActives();
        $(this).parent().addClass('active');
        loadProjectDatas(this.id);
    });
}

/**
 * Function removing all "active" rendering
 */
function removeAllActives() {
    $('.postci-project').each(function () {
        $(this).parent().removeClass('active');
    });
}

/**
 * Function displaying a prject content.
 * @param projId
 */
function loadProjectDatas(projId) {
    projectManipulator.loadProject(PROJECTS[projId]);
}