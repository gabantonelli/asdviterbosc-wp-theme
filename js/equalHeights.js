(function equalHeights(className) {
    const rowsCollection = document.getElementsByClassName(className);
    const rows = [...rowsCollection];
    let maxHeight = 0;
    const arr = rows.map(block => block.getElementsByClassName('news-thumb-title'))[0];
    for (let i = 0; i < arr.length; i++) {
        if (arr[i].offsetHeight > maxHeight) maxHeight = arr[i].offsetHeight;
    }
    for (let i = 0; i < arr.length; i++) {
        if (arr[i].offsetHeight < maxHeight) arr[i].style.height = maxHeight + 'px';
    }
})('riga-notizie')

