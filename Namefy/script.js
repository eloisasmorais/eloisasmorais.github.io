let userInput = '';

getUserInput = (event) => {
    userInput = event.target.value;
    console.log(userInput);
} 

generateName = async () => {
    let arr = [];
    let generated = "", finalName;
    let random = 0; 
    
    const response = await fetch(`https://mydictionaryapi.appspot.com/?define=${userInput}&lang=en`);
    const json = await response.json();
    arr = json[0].meaning.noun[0].synonyms;

    if (arr === undefined) {
        finalName = document.getElementById("playlist-name");
        finalName.innerHTML = `<h3 class="generated">Unable to find. =/ Type another theme.</h3>`;
    } else {
        for(let i = 0; i < 4; i++) {
            random = Math.floor(Math.random() * arr.length);
            generated += arr[random] + " "; 
        }
        generated = generated.trim();
        
        finalName = document.getElementById("playlist-name");
        finalName.innerHTML = `<h3 class="generated">"${generated}"</h3>`;
    }
    document.getElementById("user-input").value = '';
}