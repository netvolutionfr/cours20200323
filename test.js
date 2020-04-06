let villes = '';

fetch('/villes_json.php').then(res => villes = res.json()).then(data => {
    console.log(data);
    let liste = '';
    data.forEach( ville => liste += '<li>' + ville.Name + '</li>');
    document.getElementById('liste').innerHTML = liste;
});
