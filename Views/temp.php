<link href="search.css" rel="stylesheet" />
<style>
    .box-container{
        width: 500px;
        height: 800px;
        display: inline;
        margin: 30px;
        color: white;
        background: #2B2E4A;
        padding: 15px;
        border: 10px;
        border-color: #707070;
    }
    .box-seven {
        margin: 10px auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
        max-width: 320px;       
    }
    .box-seven a {
            background: green;
            padding: 1em 2.4em;
            font-size: .9em;
            margin: 1em;
            color: white;
            text-decoration: none;
            flex-grow: 1;
            text-align: ;
            border-radius: 8px;
    }
    .box-eight {
        display: flex;
        justify-content: flex-end;
    }
</style>
<div class="box-container">
    <div class="box-one"><span item-date>8 February 2016, Night</span></div> <!-- Date, time of the day -->
    <div class="box-two">Severity: <span item-severity>III</span></div> <!-- Severity -->
    <div class="box-three"><span item-id>A-1</span>| <span item-city>Dayton</span> | <span item-state>OH</span></div> <!-- ID, City, State -->
    <div class="box-four"><span item-description>Right lane blocked due to accident on l-70 Eastbound</span></div> <!-- Description -->
    <div class="box-five">Location: <span item-location>l-70 E, Dayton, OH, 45424, 39.865147, -84.05872</span></div> <!-- Location -->
    <div class="box-six"> 
    <!-- weather stats -->
        <ul>
            <li>Weather Condition: <span item-weather-condition>Ligh Rain</span>'</li>
            <li>Temperature(F): <span item-temperature>36.9</span>;</li>
            <li>Humidity(%): <span item-humidity>91</span>;</li>
            <li>Visibility(mi): <span item-visibility>10</span>;</li>
            <li>Wind Direction: <span item-wind-direction>Calm</span>;</li>
            <li>Wind Speed(mph): <span item-wind-speed> - </span></li>
            <li>Wind Chill: <span item-wind-chill> - </span></li>
            <li>Precipitation(in): <span item-precipitation>0.02</span>;</li>
            <li>Pressure: <span item-pressure> - </span></li>
        </ul>
    </div>
    <hr>
    <div class="box-seven">
    <!-- Circumstances -->
        <a><span item-amenity>Amenity</span></a>
        <a><span item-bump>Bump</span></a>
        <a><span item-crossing>Crossing</span></a>
        <a><span item-giveAway>Give_Way</span></a>
        <a><span item-Junction>Junction</span></a>
        <a><span item-No_Exit>No_Exit</span></a>
        <a><span item-Railway>Railway</span></a>
        <a><span item-Roundabout>Roundabout</span></a>
        <a><span item-Station>Station</span></a>
        <a><span item-Stop>Stop</span></a>
        <a><span itrm-Traffic_Calming>Traffic_Calming</span></a>
        <a><span item-Traffic_Signal>Traffic_Signal</span></a>
        <a><span item-Turning_Loop>Turning_Loop</span></a>
    </div>
    <hr>
    <div class='box-eight'><?= displaySvg("angle-top")?></div>
</div>