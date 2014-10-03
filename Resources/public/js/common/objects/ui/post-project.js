function PostProjectManipulator() {

    this.container = $('.post-project-manipulator');
    this.projectHeader = $('.post-project-header');
    this.projectHeaderTitle = $('.post-project-header-title');
    this.projectHeaderDescription = $('.post-project-header-description');
    this.projectHeaderDateStart = $('.post-project-header-date-start');
    this.projectHeaderLeader = $('.post-project-header-leader');
    this.projectContent = $('.post-project-content');

    this.shown = false;

    this.init = function () {
    };

    this.loadProject = function (projectArray) {

        console.log(projectArray);

        this.unshowContent();

        this.projectHeaderTitle.html('<h3>' + projectArray.name + '</h3>');
        this.projectHeaderDescription.html(projectArray.description);
        this.projectHeaderDateStart.html('<h4>Project lauched: <span class="label label-primary">' + projectArray.dateCreation + '</span></h4>');
        if (projectArray.leader.length) {
            this.projectHeaderLeader.html(projectArray.leader);
        }
        else {
            this.projectHeaderLeader.html("");
        }

        this.showContent();
    };

    this.showContent = function () {
        if (!this.shown) {
            this.container.show();
            this.shown = true;
        }
    };

    this.unshowContent = function () {
        if (this.shown) {
            this.container.hide();
            this.shown = false;
        }
    };

    this.init();
}