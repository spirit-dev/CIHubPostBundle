// Global var representing ProjectManipulator object
var projectManipulator = new PostProjectManipulator();

/**
 * JQuery function called at doc Ready
 */
$(document).ready(function () {
    projectWatch();
});

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