$(document).ready(function () {
    const bar = $(".bar");
    const percent = $(".percent");

    $("form").ajaxForm({
        beforeSend: function () {
            const percentVal = "0%";
            bar.width(percentVal);
            percent.html(percentVal);
        },
        uploadProgress: function (event, position, total, percentComplete) {
            const percentVal = percentComplete + "%";
            bar.width(percentVal);
            percent.html(percentVal);
        },
        complete: function () {
            alert("File uploaded successfully");
        },
    });
});
