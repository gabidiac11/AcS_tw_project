<link href="search.css" rel="stylesheet" />
<style>
    .box-container{
        width: 500px;
        height: 400px;
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
            background: #999;
            padding: 1em 2.4em;
            font-size: .9em;
            margin: 1em;
            color: white;
            text-decoration: none;
            flex-grow: 1;
            text-align: ;
    }
</style>
<div class="box-container">
    
    <div class="box-one">8 February 2016, Night</div>
    <div class="box-two">Severity: III</div>
    <div class="box-three">A-1 | Dayton | OH</div>
    <div class="box-four">Right lane blocked de to accident on l-70 Eastbound</div>
    <div class="box-five">Location: l-70 E, Dayton, OH, 45424, 39.865147, -84.05872</div>
    <div class="box-six">
        <ul>
            <li>Weather Condition: Ligh Rain;</li>
            <li>Temperature(F): 36.9;</li>
            <li>Humidity(%): <span>91</span>;</li>
            <li>Visibility(mi): 10;</li>
            <li>Wind Direction: Calm;</li>
            <li>Wind Speed(mph): -</li>
            <li>Precipitation(in): 0.02;</li>
        </ul>
    </div>
    <div class="box-seven">
        <a >Amenity</a>
        <a >Bump</a>
        <a >Crossing</a>
        <a >Give_Way</a>
        <a >Junction</a>
        <a >No_Exit</a>
        <a >Railway</a>
        <a >Stop</a>
    </div>
    <div class='box-eight'><?= displaySvg("angle-top")?></div>
</div>