const nl2br = (str) => {
    var res = str.replace(/\r\n/g, "<br />");
    res = str.replace(/(\n|\r)/g, "<br />");
    return res;
}

export { nl2br }