<!DOCTYPE html>
<html lang="en" class=" vjvxerws idc0_330">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Report</title>
    <link rel="stylesheet" href="/assets/packages/scholarly/css/scholarly.min.css">
    <link rel="stylesheet" href="/assets/css/report.css">
</head>

<body prefix="schema: http://schema.org" data-new-gr-c-s-check-loaded="14.1012.0" data-gr-ext-installed="">
    <header>
        <h1>Report</h1>
    </header>
    <!--
      XXX
      - check refs
      - the math example has too much maths
      - bring back some of the old style
      - make semantics, validation, processing sub-sections of each structural element
      - have a section before that for general constructs
        - explain why use RDFa
        - explain our patterns: RDFa, roles
      - figure captions need to get set throughout
      - dedication? see doc-dedication
      - syntactic constraints (prefix)
      - needs more sthenurines
      - examples of everything
      - some notes on using Semantic CSS
      - needs more RDFa in the spec itself
    -->
    <div role="contentinfo">
        <ol role="directory">

            <li><a href="#introduction"><span>1. </span>Introduction</a>
                <ol role="directory">
                    <li><a href="#introduction"><span>1.1 </span>Purpose</a></li>
                    <li><a href="#introduction"><span>1.2 </span>Intended Audience and Reading Suggestions</a></li>
                    <li><a href="#introduction"><span>1.3 </span>Product scope</a></li>
                    <li><a href="#introduction"><span>1.4 </span>References</a></li>
                </ol>
            </li>

            <li><a href="#introduction"><span>2. </span>Overall Description</a>
                <ol role="directory">
                    <li><a href="#introduction"><span>2.1 </span>Product Perspective</a></li>

                    <li><a href="#contentinfo-semantics"><span>2.2. </span>Product Functions</a>
                        <ol role="directory">
                            <li><a href="#authors"><span>2.2.1 </span>User perspective</a></li>
                            <li><a href="#authors"><span>2.2.1 </span>Administration functions </a></li>
                            <li><a href="#authors"><span>2.2.1 </span>User Classes and Characteristics </a></li>
                            <li><a href="#authors"><span>2.2.1 </span> </a></li>
                        </ol>
                    </li>

                    <li><a href="#introduction"><span>2.3 </span>Product scope</a></li>
                    <li><a href="#introduction"><span>2.4 </span>References</a></li>
                </ol>
            </li>

            <li><a href="#semantics"><span>4. </span>Semantics Overlay</a>
                <ol role="directory">
                    <li><a href="#person-org"><span>4.1 </span>Persons &amp; Organizations</a></li>
                    <li><a href="#typing-sections"><span>4.2 </span>Typing Sections</a></li>
                    <li><a href="#roles"><span>4.3 </span>Schema Roles</a></li>
                    <li><a href="#actions"><span>4.4 </span>Actions</a></li>
                    <li><a href="#article-title-semantics"><span>4.5 </span>Article and Title Semantics</a></li>
                    <li><a href="#contentinfo-semantics"><span>4.6 </span>The <code>contentinfo</code> Region Semantics</a>
                        <ol role="directory">
                            <li><a href="#authors"><span>4.6.1 </span>Authors &amp; Contributors</a></li>
                            <li><a href="#affiliations"><span>4.6.2 </span>Affiliations</a></li>
                            <li><a href="#abstract-etc"><span>4.6.3 </span>License, Copyright, Keywords, and Abstract</a></li>
                            <li><a href="#meta-notes"><span>4.6.4 </span>Notes</a></li>
                        </ol>
                    </li>
                    <li><a href="#flavored-links"><span>4.7 </span>Flavored Links</a></li>
                    <li><a href="#citations"><span>4.8 </span>Citations &amp; References</a></li>
                    <li><a href="#footnotes"><span>4.9 </span>Footnotes &amp; Endnotes</a></li>
                    <li><a href="#funding"><span>4.10 </span>Funding Information</a></li>
                    <li><a href="#disclosures"><span>4.11 </span>Disclosures</a></li>
                    <li><a href="#acknowledgements"><span>4.12 </span>Acknowledgements</a></li>
                </ol>
            </li>
            <li><a href="#scholarly-article"><span>5. </span>Scholarly Article Vocabulary</a></li>
            <li><a href="#hypermedia"><span>6. </span>Hypermedia Controls</a></li>
            <li><a href="#processing-model"><span>7. </span>Processing Model</a></li>
            <li><a href="#acks"><span>8. </span>Acknowledgements</a></li>
            <li><a href="#biblio-references"><span>9. </span>References</a></li>
        </ol>
        <dl>
            <dt>Authors</dt>
            <dd>
                Diac P. Gabriel
                &amp;
                Gradinariu Marian-Florin
                &amp;
                Vasilica Alex
            </dd>
            <dt>License</dt>
            <dd>
                <a href="http://creativecommons.org/licenses/by/4.0/">CC-BY</a>
            </dd>
        </dl>
    </div>


    <!-- INTRODUCTION SECTION -->
    <section id="introduction">
        <h2><span>1. </span>Introduction</h2>
        <p>
            AcS (USA Accidents Smart Visualizer) is an Web tool for flexible visualizing of data regarding the USA accidents between 2016 and 2020, using its own API REST service.
        </p>
        <section id="Root">
            <h3><span>1.1 </span>Purpose</h3>
            <p>
                The main purpose is the efficient visualizing of data by filtering, sorting and observing each instance in a meaningful way.
            </p>
        </section>


        <section id="article">
            <h3><span>1.2 </span> Intended Audience and Reading Suggestions</h3>
            <p>
                From a development standpoint this report includes general information regarding the code infrastructure and important details regarding the implementation. This may refer to code snippets, UML and other diagrams, external libraries, project structure and technologies used. From a project manager perspective, a number of sections are dedicated to explaining what was the main goals, focus and scalability in respect to our approach.
            </p>
        </section>


        <section id="hunk">
            <h3><span>1.3 </span>Product Scope</h3>
            <p>
                The purpose of the app is to visualize, categorize, download specific information related to a large set of data in a efficient way. The system is based on a large dataset stored in a relational database. We have a data related to United States car accidents that span between 2016-2020. For each of the accident the user has access to important details related to weather (humidity, visibility, wind, etc.), traffic conditions (stop, roundabout, giveaways etc.), duration, distance, severity and a short description. Each accident can be observed cartographically and in a form of statistical charts with the possibility of exporting each of these in formats like CSV, WEBP, SVG.
            </p>
        </section>

        <section id="biblio-references">
            <h2><span>1.4. </span>References</h2>
            <dl>
                <dt id="ref-ScholarlyArticle">Scholarly Article</dt>
                <dd property="schema:citation" typeof="schema:ScholarlyArticle" resource="https://w3c.github.io/scholarly-html">
                    <cite property="schema:name"><a href="http://www.scribd.com/doc/224608514/The-Full-New-York-Times-Innovation-Report">The
                            Report template</a></cite>,
                    by
                    <span property="schema:author" typeof="schema:Person">
                        <span property="schema:name">Tzviya Siegman (Wiley) & Robin Berjon, @robinberjon (science.ai)</span>
                    </span>;
                    <time property="schema:datePublished" datetime="2014-03" datatype="xsd:gYearMonth">2010 Mar</time>.
                </dd>
            </dl>
        </section>

    </section>


    <!-- OVERALL DESCRIPTION -->
    <section id="overallDescription">
        <h2><span>1. </span>Overall Description</h2>

        <section id="overallDescription-ProductPerspective">
            <h3><span>2.1 </span>Product Perspective</h3>
            <p>
                The product presents a common approach in dealing with a large set of data that needs to be visualized.
            </p>
            <p>
                The main focus is listing the results in a way that the essential information is touched.
            </p>
        </section>

        <section id="overallDescription-Functions">
            <h3><span>2.2 </span>Product Functions</h3>

            <section id="overallDescription-ProductPerspective-1">
                <h3><span>2.2.1 </span>User perspective</h3>
                <p>
                    The product's high-level functions are to:
                </p>
                <ul>
                    <li> store information </li>
                    <li> list each element with relevant fields in order to be better analyze a very large set of data </li>
                    <li> filter and multi-criterial search of results that may be of a special interest for a category of users </li>
                    <li> explore different kind of visualization in the form of statistics and graphic elements </li>
                    <li> export in different formats data representation that may be of a special interest for a category of users </li>
                </ul>
            </section>

            <section id="overallDescription-ProductPerspective-2">
                <h3><span>2.2.1 </span>Administration functions</h3>
                <p>
                    The product aims at:
                </p>
                <ul>
                    <li> completing missing information via imports </li>
                    <li> correcting information </li>
                    <li> add information related to recent times </li>
                </ul>
            </section>

        </section>

        <section id="overallDescription-UserClasses">
            <h3><span>2.3 </span>User Classes and Characteristics</h3>
            <p> There a different types of audiences that are targeted: </p>
            <ul>
                <li> Specialized user. A person with prior knowledge that wants to gain a detailed overview of the situation regarding the state of safety in traffic. His main focus is to corelate factors, take notes on the scale of gravity and frequency of accidents. He is interested in all factors and circumstances that may reveal certain aspects, as well as establishing links, and build up other things he already knows. His focus is on the research part. </li>

                <li> Casual user. He is usually curious and wants to have a high-level overview. He is not interested in the whole net of feature, but mostly in a random subset of them. He may be very interested in graphic representations and user-friendly interfaces.</li>

                <li> Executives. They are interested in making the app more useful for the above users, and they have a non-technical approach </li>
                <li> Developers and collaborators. They may expand, add or integrate external feature into the app. They are interested in code access, readability, scalability, design patterns. </li>
                <li> Administrators. They add new records, update existing records.</li>
            </ul>
        </section>

        <section id="overallDescription-OperatingEnvironment">
            <h3><span>2.4 </span>Operating Environment</h3>
            <ul>
                <li> Database service: MySql </li>
                <li> Client/server system </li>
                <li> Operating system: Windows </li>
                <li> Platform: PHP</li>
        </section>

        <section id="overallDescription-DesignImplementation">
            <h3><span>2.5 </span>Design and Implementation Constraints</h3>
            <p> There are several constraints to be consider: </p>
            <ul>
                <li> implemented MVC architecture constraints a matching between url and controller class. It also constrains the naming convention for views, and its also implies a strict folder structuring. </li>
                <li> Browser compatibility. The app needs further integration with IOS, and for lesser used or old version browsers. This issues are raised by Javascript unsupported implementations from our developers or from third party libraries. Further testing will have to be done. </li>
                <li> The increase of the information volume may slow down the performance and have a greater need for network resources. </li>
                <li> Difficult UX solutions for mobile users (easy navigation). </li>
                <li> All images exports are based on the Canvas API so cross-origin use is to be considered while making migrations. </li>
                <li> Database schema. The projects relies on certain fields to be present in order for the filters and other implementations to work. The project is not equipped to connect to multiple databases</li>
            </ul>
        </section>

        <section id="overallDescription-UserDocumentation">
            <h3><span>2.6 </span>User Documentation</h3>

            <dl>
                <dt id="user-doc-swagger-app">See app's Swagger: </dt>
                <dd property="schema:citation" typeof="user-doc:swagger-app" resource="https://APP-ROOT-ORIGIN/swagger">
                    <cite property="schema:name"><a href="https://APP-ROOT-ORIGIN/swagger">https://APP-ROOT-ORIGIN/swagger</a></cite>.
                </dd>
            </dl>

            <dl>
                <dt id="ref-MVC-tutorial">Build your MVC Tutorial 1</dt>
                <dd property="schema:citation" typeof="schema:MVC-tutorial-1" resource="https://lancecourse.com/howto/how-to-start-your-own-php-mvc-framework-in-4-steps">
                    <cite property="schema:name"><a href="https://lancecourse.com/howto/how-to-start-your-own-php-mvc-framework-in-4-steps">How to start your own PHP MVC framework in 4 steps?
                        </a></cite>,
                    by
                    <span property="schema:author" typeof="schema:Person">
                        <span property="schema:name"> zooboole</span>
                    </span>;
                    <time property="schema:datePublished" datetime="2021-01" datatype="xsd:gYearMonth">2021 Jan</time>.
                </dd>
            </dl>
        </section>

        <section id="overallDescription-AssumptionsDependencies">
            <h3><span>2.7 </span>Assumptions and Dependencies</h3>

            <section id="overallDescription-AssumptionsDependencies-1">
                <h3><span>2.7.1 </span> General assumptions</h3>

                <ul>
                    <li> the external libraries used are, for the time being, open for free usage </li>
                    <li> the developers would not want to make this website single page app </li>
                    <li> the api endpoints (that relates to the dataset readyOnly functions) are open for anyone to use, and are not restricted by anything </li>
                    <li> the developers would not want to lower the version of PHP from v7.3.27 </li>
                    <li> the app is restrained to car accidents and the whole theme and features are linked together in this spirit </li>
                    <li> this app works with a single dataset and it's heavily dependent on the existence of certain fields (like latitude, longitude, etc) </li>
                    <li> this app works in the geographical context of the United State and requires a lot of work to a more broader spectrum </li>
                </ul>
            </section>

            <section id="overallDescription-AssumptionsDependencies-2">
                <h3><span>2.7.2 </span> Dependencies</h3>
                <dl>
                    <dt id="ref-MVC-tutorial-1">Canvas to SVG</dt>
                    <dd property="schema:citation" typeof="schema:MVC-tutorial-1" resource="https://github.com/gliffy/canvas2svg">
                        <cite property="schema:name"><a href="https://github.com/gliffy/canvas2svg">Canvas 2 Svg v1.0.19</a></cite>,
                        by
                        <span property="schema:author" typeof="schema:Person">
                            <span property="schema:name"> Kerry Liu </span>
                        </span>;
                        <time property="schema:datePublished" datetime="2014-01" datatype="xsd:gYearMonth">2014 Jan</time>.
                    </dd>
                </dl>
                <dl>
                    <dt id="ref-MVC-tutorial-2">OpenLayers</dt>
                    <dd property="schema:citation" typeof="schema:MVC-tutorial-1" resource="https://openlayers.org/">
                        <cite property="schema:name"><a href="https://openlayers.org/">A high-performance, feature-packed library for all your mapping needs.</a></cite>,
                        by
                        <span property="schema:author" typeof="schema:Person">
                            <span property="schema:name"> MetaCarta </span>
                        </span>;
                        <time property="schema:datePublished" datetime="2020-08" datatype="xsd:gYearMonth">2020 Aug</time>.
                    </dd>
                </dl>

                <dl>
                    <dt id="ref-MVC-tutorial-3">Swagger UI</dt>
                    <dd property="schema:citation" typeof="schema:MVC-tutorial-1" resource="https://github.com/swagger-api/swagger-ui">
                        <cite property="schema:name"><a href="https://github.com/swagger-api/swagger-ui"> Create a standard web UI from a swagger configuration file.</a></cite>,
                        by
                        <span property="schema:author" typeof="schema:Person">
                            <span property="schema:name"> smartbear </span>
                        </span>;
                        <time property="schema:datePublished" datetime="2017-02" datatype="xsd:gYearMonth">2017 Feb</time>.
                    </dd>
                </dl>

                <dl>
                    <dt id="ref-MVC-tutorial-chart-4">Charts</dt>
                    <dd property="schema:citation" typeof="schema:MVC-tutorial-1" resource="https://cdn.jsdelivr.net/npm/chart.js@3.1.0/dist/chart.min.js">
                        <cite property="schema:name"><a href="https://cdn.jsdelivr.net/npm/chart.js@3.1.0/dist/chart.min.js"> Chart.js v3.1.0.</a></cite>,
                        by
                        <span property="schema:author" typeof="schema:Person">
                            <span property="schema:name"> jsdelivr </span>
                        </span>;
                        <time property="schema:datePublished" datetime="2021-02" datatype="xsd:gYearMonth">2021 Feb</time>.
                    </dd>
                </dl>
            </section>
        </section>

    </section>

    <!-- EXTERNAL INTERFACE REQUIREMENTS -->
    <section id="overallDescription-1">
        <h2><span>3. </span>External Interface Requirements</h2>

        <section id="overallDescription-ProductPerspective-3">
            <h3><span>3.1 </span>User Interfaces</h3>
            <p>
                The product presents a common approach in dealing with a large set of data that needs to be visualized.
            </p>

            <!-- SEARCH-PAGE ->>> >>> >>>->>> >>> >>>->>> >>> >>>->>> >>> >>> -->
            <section id="overallDescription-AssumptionsDependencies-3">
                <h3><span>3.1.1 </span> Search page</h3>
                <p>The main scope of the Search page is to offer users comprehensive insights regarding car accidents in the USA by helping them aggregate and visualize the data using filters, search and export capabilities.
                </p>

                <!-- SEARCH-PAGE ->>> RESULT ITEM TEMPLATE -->
                <section id="overallDescription-AssumptionsDependencies-4">
                    <h3><span>3.1.1.1 </span> Result item template</h3>
                    <p>
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/accident-card.png" alt="">
                        <figcaption>Fig. 1 - Result item template</figcaption>
                    </figure>
                    </p>
                    <ol>
                        <li><strong>Date and time of the accident,</strong> required not only for the chronological placement but also for creating meaningful and accurate forecasts, correlations with other events and factors that can affect the evolution of the number of the accidents.</li>
                        <li><strong>Severity</strong>, describes the severity of the accidents, starting with 0 for highly severe to 4 for the least severe</li>
                        <li><strong>ID</strong>, it is a number that helps users and other systems uniquely identify each accident.</li>
                        <li><strong>City </strong>and <strong>State </strong>where the accident happened, the state name is abbreviated for clarity reasons.</li>
                        <li><strong>Description</strong>, is a brief explanation of the location, cause or other significant details regarding the accident with the scope of providing the reader with a better understanding of the situation.</li>
                        <li><strong>Location</strong>, these are the exact coordinates of the place of the accident used for faster locating it on the map.</li>
                        <li><strong>Weather conditions</strong>, it is a list of different weather details known for the specific accident like temperature, humidity, visibility etc. that helps the user determine if there are causal or correlational relationships between this and other characteristics of the accidents (e.g. severity or type of the accident) that can determine the implementation of new legislation or safety measures to mitigate the effects of the weather factors.</li>
                        <li><strong>Distance</strong>, it represents the distance from the crash spot or the place where the driver loses control of the car to the place where the car stops.</li>
                        <li><strong>Circumstance tag</strong>, specifies if the accident happened in one or more of the following circumstances: Amenity, Bump, Crossing, Give Way, Junction, No Exit, Railway, Roundabout, Station, Stop, Traffic Calming, Traffic Signal, Turning Loop. These offer helpful insights for determining the impact these have on the number or severity of accidents.</li>
                    </ol>
                </section>

                <!-- SEARCH-PAGE ->>> INPUT SECTION -->
                <section id="overallDescription-AssumptionsDependencies-5">
                    <h3><span>3.1.1.1 </span> Search input</h3>
                    <p>
                        The goal of this section is to filter results using user input and access some other hidden section (the filter section that is hidden).
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/search-bar.png" alt="Search bar">
                        <figcaption>Fig. 2 - Search bar</figcaption>
                    </figure>
                    </p>
                    <ol>
                        <li><strong>Search box</strong>. Offers users the possibility to search accidents by description or id.</li>
                        <li><strong>Search button</strong>. The users need to press the search button after they entered the text they wish to search in order to get the desired results.</li>
                        <li><strong>Revert search button</strong>. This button is used for reverting the search results to the standard, unfiltered status. It will not change the &quot;Sort by&quot; button status therefore the order of the results will not change.</li>
                        <li><strong>Filter button</strong>. Used for displaying the filter section that helps the advanced users to retrieve more accurate and specific data.</li>
                        <li><strong>Sort button</strong>. When accessed, this button displays a list of 14 characteristics (e.g. State, Location, Severity) that can be used for sorting the results. Once the user selects one of these options, the system starts the search and then displays the results sorted by it. For reverting it, the user must select the Sort by option from the list.</li>
                        <li><strong>Descending order checkbox</strong>. By checking this, the results will be ordered descending and ascending if it is unchecked. The changes will be immediately visible after checking/unchecking it therefore the user does not need to press the search button again.</li>
                    </ol>
                    <p>
                        The buttons and inputs are disabled while a search is in progress. Another indicator of a search being in progress is the loader present in place of the results.
                    </p>
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/search-in-progress.png" alt="Search in progress">
                        <figcaption>Fig. 3 - Search in progress</figcaption>
                    </figure>
                </section>

                <!-- SEARCH-PAGE ->>> FILTER SECTION -->
                <section id="overallDescription-AssumptionsDependencies-6">
                    <h3><span>3.1.1.2 </span> Filter section</h3>
                    <p>The filter area is hidden but can be toggled using the button from the search bar described in the previous section. The filter area is clustered into 16 different groups, and each of these has its own reset button. In this way, the user can revert a filtering criterion without affecting the others. For the results to reflect the changes after resetting a group, the user must press the Apply button or Cancel otherwise. If the user wants to exit the filter area, he can press the Cancel button or click in the area outside of it.
                    </p>
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/filter-section.png" alt="Search in progress">
                        <figcaption>Fig. 4 - Filter section</figcaption>
                    </figure>
                    <ul>
                        <li><strong>1. Filter toggle button</strong>, used for displaying the filter section.</li>
                        <li><strong>2. Cancel and Apply buttons</strong>, used for applying or canceling the filtering criteria entered by the user. </li>
                        <li>
                            <strong>3. State</strong>, enables users to get the accidents only from some specific states. For this, users must press the arrow button that will pop out a window with the 49 states of the US to select the desired states (Fig. 5). After checking them, the user must press the Apply or Cancel in order for the settings to appear or not. When the Apply button is selected, the states will be shown as in Fig. 6. From this view, if the user changes their mind, he can press the x button after the state name, and it will be excluded from the filter. If the user wants to add more states, he can click the arrow button again and repeat the process.
                            <div class="inline-figures">
                                <figure>
                                    <img src="/assets/images/report/states-pop-up.png" alt="Search in progress">
                                    <figcaption>Fig. 5 - Pop up with the state list</figcaption>
                                </figure>
                                <figure>
                                    <img src="/assets/images/report/selected-states.png" alt="Search in progress">
                                    <figcaption>Fig. 5 - View of the selected states</figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <strong>4. Location (Within 15 ray)</strong>, enables users to retrieve the accidents that are located within a 15 ray of the location selected by them on the map (Fig. 6) that will pop out after clicking the arrow button from this section. In the map pop up, the user can select a location by clicking it on the map then the selected coordinates will appear in the right bottom corner. For an accurate localization, the users can zoom in or out using the mouse wheel or the "+" or "-" buttons on the left top corner. The users can visualise the different areas of the map using drag and drop movements. In the end, the user should press the Apply button if he wants to keep the settings, otherwise the Cancel button. After the selection is made, the coordinates will be shown as in Fig. 7.
                            <div class="inline-figures">
                                <figure>
                                    <img src="/assets/images/report/map-pop-up.png" alt="Map pop up">
                                    <figcaption>Fig. 6 - Pop up with the map</figcaption>
                                </figure>
                                <figure>
                                    <img src="/assets/images/report/selected-coordinates.png" alt="Selected coordinates">
                                    <figcaption>Fig. 7 - View of the selected coordinates</figcaption>
                                </figure>
                            </div>
                        </li>
                        <li><strong>5. Within Severity (*some)</strong>, allows users to retrieve only the accidents that have one of the selected severities. The users can select multiple options.</li>
                        <li><strong>6. Period</strong>, allows users to retrieve accidents that happened at specific periods of time. If both start and end date are completed, the users will get all the accidents that occurred between these dates. However, the users are not required to complete both. They can enter only the start date, and so they will get all accidents from the start date till the present moment, or only the end date if they want the accidents till a specified date.</li>
                        <li><strong>7. Distance (mi)</strong>, allows users to get the accidents that have the distance (from the crash spot to the place where the car stops) between a minimum and maximum value. The users is not required to enter both values because if only the minimum value is specified the maximum will be implicitely the highest value in the database and vice versa.</li>
                        <li><strong>8 - 14: Temperature (F), Wind Chill (F), Humidity (%), Pressure(in), Visibility(mi), Wind speed(mph), Precipitation(in)</strong>, allows the accidents filtering by the minimum and/or maximum values of the prior named wheather characteristics. The units of measurement are specified in parentheses.</li>
                        <li><strong>15. Wind Direction (*some)</strong>, fetches the accidents that happened when the wind dirrection was at least like one of the checked values.</li>
                        <li><strong>16. Weather Condition (*some)</strong>, helps the users fetch only the accidents that happened when the weather had at least one of the selected characteristics.</li>
                        <li><strong>17. Circumstance (*every)</strong>, gets the accidents that happened under all the selected circumstances.</li>
                        <li><strong>18. Astrological twilight (*some)</strong>, enables the filtering of the accidents by time of the day.</li>
                    </ul>
                    <p>
                        decribe appling the filter, cancel button behavior, reseting the filters
                    </p>

                    <p> There are a variety of filters. </p>

                    <section id="overallDescription-AssumptionsDependencies-7">
                        <h3><span>3.1.1.2.1 Checkbox types</span> </h3>
                        <p>
                            From a point of impact, some filters can display multiple options to be selected. Some of these filters are marked as "every", meaning that each item must satisfy all options selected simultaneously. Some are marked as "some", meaning that a result will be displayed if at least one options is satisfied. In both of these types if no options is chosen they are ignored completely.
                        </p>

                        <p>
                            further describe and list them (state filter focus)
                        </p>
                    </section>

                    <section id="overallDescription-AssumptionsDependencies-8">
                        <h3><span>3.1.1.2.2 Location</span> </h3>
                        <p>
                            describe and list them
                        </p>
                    </section>

                    <section id="overallDescription-AssumptionsDependencies-9">
                        <h3><span>3.1.1.2.3 Date</span> </h3>
                        <p>
                            describe and list them
                        </p>
                    </section>

                    <section id="overallDescription-AssumptionsDependencies-10">
                        <h3><span>3.1.1.2.4 Range</span> </h3>
                        <p>
                            describe and list them
                        </p>
                    </section>
                </section>

                <!-- SEARCH-PAGE ->>> PAGINATION SECTION -->
                <section id="overallDescription-AssumptionsDependencies-11">
                    <h3><span>3.1.1.3 </span> Pagination </h3>
                    <p>
                        describe how many per page (3 options 10, 20, 50) </br>
                        when filters are changing pagination resets
                    </p>
                </section>

                <!-- SEARCH-PAGE ->>> EXPORT UI -->
                <section id="overallDescription-AssumptionsDependencies-12">
                    <h3><span>3.1.1.4 </span> Export UI </h3>
                    <p>
                        describe that results from the page are exported (that are filtered)
                    </p>

                    <section id="overallDescription-AssumptionsDependencies-13">
                        <h3><span>3.1.1.4.1 </span> Export CSV </h3>
                        <p>
                            describe and show something
                        </p>
                    </section>

                    <section id="overallDescription-AssumptionsDependencies-14">
                        <h3><span>3.1.1.4.1 </span> Cartographic export and visualization </h3>
                        <p>
                            describe how can you see points on the map and on click it shows information
                        </p>
                        <p>[..show-images..]</p>

                        <p> Explain that can be exported in webp and svg with those buttons </p>
                    </section>

                </section>

            </section>

            <!-- CHART-PAGE ->>> >>> >>>->>> >>> >>>->>> >>> >>>->>> >>> >>> -->
            <section id="overallDescription-AssumptionsDependencies-15">
                <h3><span>3.1.2 </span> Chart page</h3>
                <p>
                    [...purpose...]
                </p>

                <!-- CHART-PAGE ->>> Chart 'Number of cases per state' -->
                <section id="overallDescription-AssumptionsDependencies-16">
                    <h3><span>3.1.2.1 </span> Chart number of cases per state </h3>
                    <p>
                        image and describe interaction
                    </p>
                </section>


                <!-- CHART-PAGE ->>> Chart severity -->
                <section id="overallDescription-AssumptionsDependencies-17">
                    <h3><span>3.1.2.2 </span> Chart severity </h3>
                    <p>
                        image and describe (how can you see result OVERALL or PER STATE), describe interactions
                    </p>
                </section>

                <!-- CHART-PAGE ->>> CHART Timeline -->
                <section id="overallDescription-AssumptionsDependencies-18">
                    <h3><span>3.1.2.3 </span> Chart timeline </h3>
                    <p>
                        describe 4 curbes for each year (2016-2020)</br>

                        describe interaction
                    </p>
                    <p>
                </section>

                <!-- CHART-PAGE ->>> EXPORT SECTION -->
                <section id="overallDescription-AssumptionsDependencies-19">
                    <h3><span>3.1.2.4 </span> Export chart</h3>
                    <p>
                        show image and say that can be exported...
                    </p>
                </section>
            </section>
            <!-- INSERT NEXT PAGE ->>> >>> >>>->>> >>> >>>->>> >>> >>>->>> >>> >>> -->
        </section>

        <section id="overallDescription-ProductPerspective-4">
            <h3><span>3.2 </span>Hardware interfaces</h3>
            <ul>
                <li> A device that supports Windows 10, Internet connection and the latest version of Chrome browser.</li>
            </ul>
        </section>

        <section id="overallDescription-ProductPerspective-5">
            <h3><span>3.3 </span>Software interfaces</h3>

            <section id="overallDescription-ProductPerspective-6">
                <h3><span>3.3.1 </span>Operating system</h3>
                <p>
                    We've chosen <i>Windows</i> as the primary operating system because is widely available, and thus reaches a large pool of audiences. It's is also very familiar, and supports a lot of services.
                </p>
            </section>

            <section id="overallDescription-ProductPerspective-7">
                <h3><span>3.3.2 </span>Database</h3>
                <p>
                    <i>MySql</i>
                </p>
            </section>

            <section id="overallDescription-ProductPerspective-8">
                <h3><span>3.3.3 </span>Platform</h3>
                <p>
                    PHP ^v7.3. PHP is easy to use and has a lot of build in functionalities.
                </p>
            </section>

            <section id="overallDescription-ProductPerspective-9">
                <h3><span>3.3.4 </span>Open Layers</h3>
                <p>
                    Open Layers is a fast API, with a rich documentation, and a community behind.
                </p>
            </section>

            <section id="overallDescription-ProductPerspective-10">
                <h3><span>3.3.4 </span>Chart Js</h3>
                <p>
                    Offers high quality, responsive drawings. Has a great approach in object abstraction, which makes for a easy going process of modeling the database rows into comprehensive drawings.
                </p>
            </section>

            <section id="overallDescription-ProductPerspective-11">
                <h3><span>3.3.5 </span>Canavs2Svg Js</h3>
            </section>
        </section>
    </section>

    <!-- Other Nonfunctional Requirements -->
    <section id="overallDescription-3">
        <h2><span>5.Developer guide</span></h2>

        <!-- MVC ARCHITECTURE -->
        <section id="overallDescription-4">
            <h2><span>5.1 MVC Architecture </span></h2>
            <p>
                The architecture rests on a hierarchy of classes provided in the <i> Fig. 5.1 </i>. The folder structure and naming convention are important for the this app to work.
            </p>

            <p>
            <figure class="report-centered-fig">
                <img src="/assets/images/report/uml/mvc-infrastructure.png" alt="mvc-architecture">
                <figcaption>Fig. 5.1 - MVC Architecture UML</figcaption>
            </figure>
            </p>

            <section id="overallDescription-2">
                <h2><span>5.1.1 App </span></h2>
                <p>
                    The class that is inherited by both Model and Controller classes. Its purpose is to provide access to the Router and Database singleton instances evenly.
                </p>
            </section>

            <section id="overallDescription-2">
                <h2><span>5.1.2 Router </span></h2>
                <p>
                    The class that is inherited by both Model and Controller classes. Its purpose is to provide access to the Router and Database singleton instances evenly.
                </p>
                <ul>
                    <li>
                        Resolver. All requests are directed to ROOT/index.php (using .htaccess). Next, using the Router class, a controller and its method is determined, imported dynamically and called upon. The controller and the method is matched via url pathname splitting. If no match is found, the <i> NotFound </i> view is loaded.
                    </li>
                    <li>
                        The router is also used as a facade for PHP methods (redirect via header).
                    </li>
                </ul>
            </section>

            <section id="overallDescription-2">
                <h2><span>5.1.3 Database </span></h2>
                <p>
                    The class uses facade and singleton. The class is available for both Model and Controller classes.
                </p>
                <ul>
                    <li>
                        <i> select </i> method - executes a sql select statement (string) given as parameter and returns an array of associative arrays
                    </li>
                    <li>
                        <i> insert </i> method - executes a sql insert statement given as parameter and returns the inserted id - meaning the primary key of the inserted row
                    </li>
                    <li>
                        <i> prepareStmt </i> method - does the same as the PHP known method, and acts as an intermediary avoiding making the mysqli connection instance available
                    </li>
                </ul>
            </section>

            <section id="overallDescription-2">
                <h2><span>5.1.4 Controller </span></h2>
                <p>
                    Represents the base class for all controllers.
                </p>
                <ul>
                    <li>
                        Model loading. An important use of this class is the loading of models via <i>loadModel</i> method. All the logic is intended to get pass to the model instance. The controller is intended to call the needed methods and receive a response then print it on the screen.
                    </li>

                    <li>
                        View loading. Via <i>loadView</i> method a view file is imported. Any view has a PHP associative array named (<i>$BLOCK</i>), that can be used for server side rendering. The server side rendering is used for rendering certain ui (in limited amounts). A plain string from the server echoed in the view is not advised, as is harder to trace by the naked eye or by the IDE, easy to break and hard to extend. Data fetched via time consuming operations are left for javascript and Ajax requests, which are handling that more smoothly. The server rendering is used for avoiding repetitive code (see the search view) or other small UI elements (see charts view), with HTML and PHP separation.
                    </li>

                    <li>
                        regulates which page is allowed based on authentication or maintenance status
                    </li>

                    <li>
                        regulates which request method is allowed for a given endpoint
                    </li>
                </ul>
            </section>

            <section id="overallDescription-2">
                <h2><span>5.1.5 Model </span></h2>
                <p>
                    Processes the actual request of an API endpoint.
                </p>
                <ul>
                    <li>
                        interacts with the database
                    </li>
                    <li>
                        throws the bad HTTP code
                    </li>
                    <li>
                        validates client input data
                    </li>
                    <li>
                        determines and returns the response data
                    </li>
                </ul>
            </section>

        </section>

        <!-- SEARCH PAGE SERVICE -->
        <section id="overallDescription-5">
            <h2><span>5.2 Search Page Service </span></h2>
            <p>
                This section explains the <a href="/search" target="_blank"> search page </a> and its related API.The functionality is concentrating around the <i>SearchModel</i>.
            </p>
            <p>
            <figure class="report-centered-fig">
                <img src="/assets/images/report/uml/search-model-uml.png" alt="search-model-uml">
                <figcaption>Fig. 5.2 - SearchModel UML</figcaption>
            </figure>
            </p>

            <section id="overallDescription-6">
                <h2><span>5.2.1 Results </span></h2>
                <p>
                    This /search endpoint is explained in great details in the <a href="/swagger#/search/results" target="_blank">swagger</a>.
                </p>

                <p> From a development standpoint, is important to know about the <i> Accident </i> entity, which models the dataset in a compressive way. Besides its obvious purpose, this class and the classes of its composition have static methods that convert the usual associative array of database rows into respective entities. </p>

                <p>
                    The search mechanism is better understood in the context of the next section detailing the filters.
                </p>

                <figure class="report-centered-fig">
                    <img src="/assets/images/report/uml/accident-entity-uml.png" alt="search-model-uml">
                    <figcaption>Fig. 5.2 - Accident entity UML</figcaption>
                </figure>
                </p>
            </section>

            <section id="overallDescription-6">
                <h2><span>5.2.2 Filters </span></h2>
                <p>
                    This /filters endpoint is explained in great details in the <a href="/swagger#/search/filters" target="_blank">swagger</a>.
                </p>

                <p> The <i> Filter </i> entity is the base for search feature and has a large spectrum of abstraction. Each filter starts from a default configuration, consisting of options with empty value fields. Some filters need to consult the database information to fetch its options. </p>

                <p>
                <figure class="report-centered-fig">
                    <img src="/assets/images/report/uml/accident-entity-uml.png" alt="search-model-uml">
                    <figcaption>Fig. 5.3 - Filter entity UML</figcaption>
                </figure>
                </p>

                <section id="overallDescription-6">
                    <h2><span>5.2.2.1 Roles </span></h2>
                    <ul>
                        <li>
                            Provides the frontend with recognized entities. The frontend knows to paint each filter by instantiating its own entities, that are rendering themselves. This gives to the backend enough freedom to add a lot of new filters without anything new being implemented in the frontend.
                        </li>

                        <li>
                            Sql query building. Each filter has a private property that indicates which column of the database it can impact (<i>bind</i>). Some filters can have their options bind to a certain column, instead of the overall filter. The important identifiers of a filter is its key and the key property of its individual options. The client receives the default filters (Note: only the public fields). The user modifies those filters in the frontend part. When a search is triggered, the client preserves the overall structure of the filters and sends them updated with with new values. The server re-creates the default filters (without fetching from the database), and matches them (by key) with the client data, and only updates the value fields of a filter, which are escaped or casted (for non-string types) in order to avoid injections. The mysql syntax permits wrapping values in apostrophe, regardless of the type, and that's making the escape safe from injection. Using this arrangement the column that is bind to a filter is determined without client knowledge. Each filter can create a conditional part of a sql statement, and get joined within AND's.
                        </li>
                    </ul>
                </section>

                <section id="overallDescription-6">
                    <h2><span>5.2.2.2 Other mentions </span></h2>
                    <ul>
                        <li>
                            the result item (<a href="#overallDescription-AssumptionsDependencies-4"></<i>Fig. 1</i><a>) is generated using service side rendering. When rendering results, the frontend associates an instance of a class to a html node with a generic structure, that permits updates of inner elements using an attribute scheme for matching. In the php file a N-list of such nodes are rendered (hidden) in a for loop, keeping PHP and HTML code separated. These nodes are then ready on page load and are to be attached to Js instances, filled with information and showed.
                        </li>

                        <li>
                            The code is documented via PHP-doc and JsDoc.
                        </li>
                    </ul>
                </section>
            </section>
        </section>

        <!-- CHAR PAGE SERVICE -->
        <section id="overallDescription-5">
            <h2><span>5.3 Chart Page Service </span></h2>
            <p>
                This section explains the <a href="/charts" target="_blank"> charts page </a> and its related API.The functionality is concentrating around the <i>ChartModel</i>.
            </p>
            <p>
            <figure class="report-centered-fig">
                <img src="/assets/images/report/uml/chart-model-uml.png" alt="chart-model-uml">
                <figcaption>Fig. 5.5 - ChartModel UML</figcaption>
            </figure>
            </p>

            <p>
                The main entity, <i>ChartEntity</i>, is modeled exactly after the parameters accepted by the <a href="#ref-MVC-tutorial-chart-4"><i>ChartJs</i></a> library. To better understand how to use this entity, please consult the <a href="https://www.chartjs.org/docs/latest/" target="_blank">library documentation</a>.
            </p>
            <p>
            <figure class="report-centered-fig">
                <img src="/assets/images/report/uml/chart-entity-uml.png" alt="chart-entity-uml">
                <figcaption>Fig. 5.6 - CharEntity UML</figcaption>
            </figure>
            </p>

            <p>
                Chart related endpoints are explained in great details in the <a href="/swagger#/charts" target="_blank">swagger</a>.
            </p>

            <p>
                The backend part constructs various chart data using available dataset and models them by the established library guidelines.
            </p>
        </section>

        <!-- CHAR PAGE SERVICE -->
        <section id="overallDescription-5">
            <h2><span>5.4 Export </span></h2>
            <p>
                This section gives a general overview of export functionality.
            </p>
            <p>

            <p> The exports are used in various part of the app (see the above <a href="#overallDescription-1">section</a>). There are several types of export formats:</p>
            <ul>
                <li>
                    CSV. This format is done server side and uses default PHP functions that can be consulted in the manual.
                </li>

                <li>
                    WEBP. This is done in the frontend part and it relates to largely supported Javascript features of the Canvas API, which offers a large pool of options.
                </li>

                <li>
                    SVG. This format uses the same Js features as the Webp option, but is decorated by a third-party library, <a href="#ref-MVC-tutorial-1">Canvas2Svg</a>.
                </li>
            </ul>
        </section>

    </section>

    <!-- Other Assignments -->
    <section id="overallDescription-7">
        <h2><span>6.Work assignments</span></h2>

        <section id="overallDescription-8">
            <h2><span>6.1 Diac P. Gabriel </span></h2>
            <h2><span>6.1.2 Backend </span></h2>
            <section id="DiacPGabriel-assign-backend">
                <ul>
                    <li> MVC infrastructure </li>
                    <li> Swagger installation </li>
                    <li> Swagger annotations of the endpoints worked on </li>
                    <li> Search page - algorithm design, object modeling, filter and search endpoints, parts of the export </li>
                    <li> Chart page - algorithm design, object modeling, all related endpoints and UI</li>
                </ul>
            </section>

            <section id="DiacPGabriel-assign-frontend">
                <h2><span>6.1.3 Frontend </span></h2>
                <ul>
                    <li>Search page - algorithm and UX design, javascript code related to filtering results, pagination, loading results, cartographic representations, most of the UI elements that interact with the user (search, clear, filter toggle, apply/clear/cancel filters controls, pagination controls, export dropdown, sort and sort by selectors) </li>

                    <li>Chart page - algorithm and UX design changes, UI elements, and Javascript classes </li>
                </ul>
            </section>
        </section>

        <section id="overallDescription-9">
            <h2><span>6.2 Gradinariu Marian-Florin </span></h2>
            <ul>
                <li>describe 1</li>
            </ul>
        </section>

        <section id="overallDescription-10">
            <h2><span>6.3 Vasilica Alex </span></h2>
            <ul>
                <li>describe 1</li>
            </ul>
        </section>
    </section>

    </section>
</body>

</html>