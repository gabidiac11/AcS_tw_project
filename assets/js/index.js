// Native
// Check if the DOMContentLoaded has already been completed

/**
 * https://gomakethings.com/converting-a-string-into-markup-with-vanilla-js/
 * Convert a template string into HTML DOM nodes
 * @param  {String} str The template string
 * @return {Node}       The template HTML
 */
const stringToHTML = function (str) {
    const isSupported = (function () {
        if (!window.DOMParser) {
            return false;
        }
        const parser = new DOMParser();

        try {
            parser.parseFromString('x', 'text/html');
        } catch(err) {
            return false;
        }
        return true;
    })();

    if (isSupported) {
        const parser = new DOMParser();
        const doc = parser.parseFromString(str, 'text/html');
        return doc.body.firstChild;
    }

    // fallback to old-school method
    const dom = document.createElement('div');
    dom.innerHTML = str;
    return dom;

};

window.BASE_URL = `http://localhost/`;