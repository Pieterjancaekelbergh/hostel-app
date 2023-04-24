import Dropzone from "dropzone";
import "dropzone/dist/dropzone.css";

const dropzone = new Dropzone("#dragndrop", {
    maxFilesize: 2,
    maxFiles: 10,
    acceptedFiles: "image/*",
    addRemoveLinks: true,
});

// basic events for dropzone
dropzone.on("success", function (file, response) {});

dropzone.on("error", function (file, response) {});

dropzone.on("removedfile", function (file) {});
