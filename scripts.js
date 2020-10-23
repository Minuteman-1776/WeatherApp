var button = document.querySelector('#button');
var input = document.querySelector('#search');

function searchCity(){

    fetch('https://api.openweathermap.org/data/2.5/weather?q='+input.value+'&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric')
    .then(response=> response.json())
    .then(data => {
        var name = data['name'];
        var icon = data['weather'][0]['icon'];
        var weather = data['weather'][0]['description'];
        var sky = data['weather'][0]['main'];
        var country = data['sys']['country'];
        var temperature = data['main']['temp'];
        
        
        var link = ('http://openweathermap.org/img/wn/'+icon+'.png')


        //Alternate 1
        document.querySelector('#resultbox .round-city h1').innerHTML = name;
        document.querySelector('#resultbox .round-weather img').src = link;
        document.querySelector('#resultbox .round-weather h4').innerHTML = weather;
        document.querySelector('#resultbox .round-descripton p').innerHTML = sky;
        document.querySelector('#resultbox .round-country p').innerHTML = country;
        document.querySelector('#resultbox .round-temperature p').innerHTML = temperature+'&#8451';   


        // //Alternate 2 (Not recommended, its just long version of Alternate 1)
        // var cityName = document.querySelector('#resultbox h1');
        // var cityIcon = document.querySelector('#resultbox img');
        // var cityWeather = document.querySelector('#resultbox h4');
        // var citySky = document.querySelector('#resultbox p:nth-child(4)');
        // var citysCountry = document.querySelector('#resultbox p:nth-child(5)');
        // var cityTemperature = document.querySelector('#resultbox p:nth-child(6)'); 

        // cityName.innerHTML = name;
        // cityIcon.src = link;
        // cityWeather.innerHTML = weather;
        // citySky.innerHTML = sky;
        // citysCountry.innerHTML = country;
        // cityTemperature.innerHTML = temperature;  


        // //Alternate 3 (Not recommended, it cause dip effect on a screen coz you gota remove the parent first and then call em back, so its actually just for one time call)
        // document.querySelector('#resultbox').innerHTML = "";
        //
        // const markup = `
        // <div class="resultbox">
        //     <h1>${name}</h1>
        //     <img src="http://openweathermap.org/img/wn/${icon}.png">
        //     <h4>${weather}</h4>
        //     <p>${sky}</p>
        //     <p>${country}</p>
        //     <p>${temperature}</p>
        // </div>`
        // document.querySelector('#result').insertAdjacentHTML('beforeend', markup);


        //Empty the search box after search result shown up
        search.value = "";
        
    })
    .catch(err => alert("City not found"))
}

//Mouse Click
button.addEventListener('click', function(){
    searchCity();
})

//Keyboard 'Enter'
input.addEventListener('keyup', function(event){
    if(event.keyCode === 13){
        searchCity();
    }
});

//function expression to select elements
const selectElement = (s) => document.querySelector(s);
//open the menu on click
selectElement('.open').addEventListener('click', () => {
    selectElement('.nav-list').classList.add('active');
});
//close the menu on click
selectElement('.close').addEventListener('click', () => {
    selectElement('.nav-list').classList.remove('active');
});