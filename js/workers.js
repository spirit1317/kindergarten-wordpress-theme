function timedCount() {
    postMessage("nextslide");
    setTimeout("timedCount()", 500);
    console.log("gowno");
}
timedCount();
