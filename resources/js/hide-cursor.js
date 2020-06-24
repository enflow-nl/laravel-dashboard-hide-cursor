
var cursor = {
    delay: 2 * 1000, // in milliseconds
    timeout: null,
    show: () => {
        document.body.classList.remove('hide-cursor');
    },
    hide: () => {
        document.body.classList.add('hide-cursor');
    },
};

if (document.querySelector('.js-hide-cursor')) {
    document.addEventListener("mousemove", (event) => {
        clearTimeout(cursor.timeout);
        cursor.show();
        cursor.timeout = setTimeout(() => {
            cursor.hide();
        }, cursor.delay)
    });
}
