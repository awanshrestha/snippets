fetch('data.json')
.then( (response) => response.json() )
.then( (data) =>{
    var data = data[Math.floor(Math.random() * data.length)];
    
    document.getElementById('quote').innerText = data.text;
    document.getElementById('author').innerText = "- " + data.author;
})