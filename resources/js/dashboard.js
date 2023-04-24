import axios from "axios";
import Dropzone from "dropzone";
import "dropzone/dist/dropzone.css";

const dropzone = new Dropzone("#dragndrop", {
    maxFilesize: 2,
    maxFiles: 10,
    acceptedFiles: "image/*",
    addRemoveLinks: true,
});

// basic events for dropzone
dropzone.on("success", function (file, response) {
    console.log(response);
    console.log(file);

    // add remove data attribute
    file._removeLink.dataset.name = response.name;
});

dropzone.on("error", function (file, response) {
    alert(response.message);
    // remove file from dropzone
    dropzone.removeFile(file);
});

dropzone.on("removedfile", function (file) {
    const name = file._removeLink.dataset.name;

    axios
        .delete("removeRoute", {
            data: {
                name: name,
            },
        })
        .then((response) => {
            console.log(response);
        })
        .catch((error) => {
            console.log(error);
        });
});
