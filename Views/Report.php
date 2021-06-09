<!DOCTYPE html>
<html lang="en" class=" vjvxerws idc0_330">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                    <li><a href="#introduction-Purpose"><span>1.1 </span>Purpose</a></li>
                    <li><a href="#introduction-Intended"><span>1.2 </span>Intended Audience and Reading Suggestions</a></li>
                    <li><a href="#introductionProduct-scope"><span>1.3 </span>Product scope</a></li>
                    <li><a href="#introductionReferences"><span>1.4 </span>References</a></li>
                </ol>
            </li>

            <li><a href="#overallDescription"><span>2. </span>Overall Description</a>
                <ol role="directory">
                    <li><a href="#overallDescriptionPP"><span>2.1 </span>Product Perspective</a></li>

                    <li><a href="#overallDescriptionProductF"><span>2.2. </span>Product Functions</a>
                        <ol role="directory">
                            <li><a href="#overallDescriptionUserP"><span>2.2.1 </span>User perspective</a></li>
                            <li><a href="#overallDescriptionAdmF"><span>2.2.2 </span>Administration functions </a></li>
                        </ol>
                    </li>

                    <li><a href="#overallDescriptionUsrClCh"><span>2.3 </span>User Classes and Characteristics</a></li>
                    <li><a href="#overallDescriptionOpEnv"><span>2.4 </span>Operating Environment</a></li>
                    <li><a href="#overallDescriptionDesignIC"><span>2.5 </span>Design and Implementation Constraints</a></li>
                    <li><a href="#overallDescriptionUDoc"><span>2.6 </span>User Documentation</a></li>

                    <li><a href="#overallDescriptionAssumptionD"><span>2.7. </span>Assumptions and Dependencies</a>
                        <ol role="directory">
                            <li><a href="#overallDescriptionAssumptionGen"><span>2.7.1 </span>General assumptions</a></li>
                            <li><a href="#overallDescriptionDepends"><span>2.7.2 </span>Dependencies </a></li>
                        </ol>
                    </li>
                </ol>
            </li>

            <li><a href="#extIntReq"><span>3. </span>External Interface Requirements</a>
                <ol role="directory">
                    <!-- USER INTERFACES -->
                    <li><a href="#extIntReqUserInt"><span>3.1 </span>User Interfaces</a>
                        <ol role="directory">
                            <!-- SEARCH PAGE -->
                            <li><a href="#extIntReqUISearchPage"><span>3.1.1 </span>Search page</a>
                                <ol role="directory">
                                    <li><a href="#extIntReqUISearchPageResult"><span>3.1.1.1 </span>Result item template</a></li>
                                    <li><a href="#extIntReqUISearchPageSearch"><span>3.1.1.2 </span>Search input</a></li>
                                    <li><a href="#extIntReqUISearchPageFilter"><span>3.1.1.3 </span>Filter section</a></li>
                                    <li><a href="#extIntReqUISearchPageFilterPagination"><span>3.1.1.4 </span>Pagination</a></li>

                                    <li><a href="#extIntReqUISearchPageExportUI"><span>3.1.1.5 </span>Export UI types</a>
                                        <ol role="directory">
                                            <li><a href="#extIntReqUISearchPageExportUICsv"><span>3.1.1.5.1 </span>Export CSV</a></li>
                                            <li><a href="#extIntReqUISearchPageExportUIMap"><span>3.1.1.5.2 </span> Cartographic export and visualization </a></li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>

                            <!-- CHART PAGE -->
                            <li><a href="#extIntReqUIChartPage"><span>3.1.2 </span>Chart page</a>
                                <ol role="directory">
                                    <li><a href="#extIntReqUIChartPageChartPerState"><span>3.1.2.1 </span>Chart 1: Number of cases per state</a></li>
                                    <li><a href="#extIntReqUIChartPageChartSeverity"><span>3.1.2.2 </span>Chart 2: Number of cases grouped by severity overall and per state</a></li>
                                    <li><a href="#extIntReqUIChartPageTimeline"><span>3.1.2.3 </span>Chart 3: Timeline of cases per year</a></li>
                                    <li><a href="#extIntReqUIChartPageExport"><span>3.1.2.4 </span>Export UI types</a>
                                    </li>
                                </ol>
                            </li>

                        </ol>
                    </li>
                    <!-- LOGIN PAGE -->
                    <li><a href="#adminLoginPanel"><span>3.1.3 </span>Login Page</a>
                    </li>
                    <!-- LOGIN MAIN PAGE -->
                    <li><a href="#LoginPageMainPage"><span>3.1.4 </span>Login Main Page</a>
                    </li>
                    <!-- MAINTENANCE MODE PAGE -->
                    <li><a href="#LoginMaintenanceMode"><span>3.1.5 </span>Maintenance Mode Page</a>
                    </li>
                    <!-- Database Editor PAGE -->
                    <li><a href="#LoginDatabaseEditor"><span>3.1.6 </span>Database Editor Page</a>
                    </li>
                    <!-- Account Manager PAGE -->
                    <li><a href="#LoginAccountsManager"><span>3.1.7 </span>Accounts Manager Page</a>
                    </li>
            </li>

                    <!-- 3. OTHER -->
                    <li><a href="#extIntReqHardware"><span>3.2 </span>Hardware interfaces</a></li>
                    <li><a href="#extIntReqSoftware"><span>3.3 </span>Software interfaces</a>
                        <ol role="directory">
                            <li><a href="#extIntReqOperatingSys"><span>3.3.1 </span>Operating system</a></li>
                            <li><a href="#extIntReqDatabase"><span>3.3.2 </span>Database</a></li>
                            <li><a href="#extIntReqPlatform"><span>3.3.3 </span>Platform</a></li>
                            <li><a href="#extIntReqOpenLayers"><span>3.3.4 </span>Open Layers</a></li>
                            <li><a href="#extIntReqChart"><span>3.3.5 </span>Chart Js</a></li>
                            <li><a href="#extIntReqCanvas2Svg"><span>3.3.6 </span>Canvas2Svg Js</a></li>
                        </ol>
                    </li>

                </ol>
            </li>

            <li><a href="#devGuide"><span>4. </span>Developer guide</a>
                <ol role="directory">
                    <!-- MVC ARCHITECTURE -->
                    <li><a href="#devGuideMVC"><span>4.1 </span>MVC Architecture</a>
                        <ol role="directory">
                            <li><a href="#devGuideMVCApp"><span>4.1.1 </span>App</a></li>
                            <li><a href="#devGuideMVCRouter"><span>4.1.2 </span>Router</a></li>
                            <li><a href="#devGuideMVCDatabase"><span>4.1.3 </span>Database</a></li>
                            <li><a href="#devGuideMVCController"><span>4.1.4 </span>Controller</a></li>
                            <li><a href="#devGuideMVCModel"><span>4.1.5 </span>Model</a></li>
                        </ol>
                    </li>

                    <!-- SEARCH PAGE SERVICE -->
                    <li><a href="#devGuideSearchService"><span>4.2 </span>Search Page Service</a>
                        <ol role="directory">
                            <li><a href="#devGuideSearchServiceResults"><span>4.2.1 </span>Results</a></li>
                            <li><a href="#devGuideSearchServiceFilters"><span>4.2.2 </span>Filters</a>
                                <ol role="directory">
                                    <li><a href="#devGuideSearchServiceFiltersRoles"><span>4.2.2.1 </span>Roles</a></li>
                                    <li><a href="#devGuideSearchServiceFiltersMentions"><span>4.2.2.2 </span>Other mentions</a></li>
                                </ol>
                            </li>
                        </ol>
                    </li>


                    <!-- CHART PAGE SERVICE -->
                    <li><a href="#devGuideChartPageService"><span>4.3 </span>Chart Page Service</a></li>

                    <!-- EXPORT SERVICE -->
                    <li><a href="#devGuideExportService"><span>4.4 </span>Export Service</a></li>

                    <!-- DATABASE CONFIGURATION -->
                    <li><a href="#devGuideDatabaseConfiguration"><span>4.5 </span>Database Configuration</a></li>
                </ol>
            </li>

            <!-- ASSIGNMENTS -->
            <li><a href="#workAssignment"><span>5. </span>Work assignments</a>
                <ol role="directory">
                    <!-- DIAC P. GABRIEL -->
                    <li><a href="#workAssignmentDiac"><span>5.1 </span>Diac P. Gabriel</a>
                        <ol role="directory">
                            <li><a href="#workAssignmentDiacBackend"><span>5.1.1 </span>Backend</a></li>
                            <li><a href="#workAssignmentDiacFrontend"><span>5.1.2 </span>Frontend</a></li>
                        </ol>
                    </li>

                    <!-- GRADINARIU MARIAN-FLORIN -->
                    <li><a href="#workAssignmentGradinariu"><span>5.2 </span>Gradinariu Marian-Florin</a>
                        <ol role="directory">
                            <li><a href="#workAssignmentGradinariuBackend"><span>5.2.1 </span>Backend</a></li>
                            <li><a href="#workAssignmentGradinariuFrontend"><span>5.2.2 </span>Frontend</a></li>
                        </ol>
                    </li>

                    <!-- VASILICA ALEX -->
                    <li><a href="#workAssignmentVasil"><span>5.3 </span>Vasilica Alex</a>
                        <ol role="directory">
                            <li><a href="#workAssignmentVasilBackend"><span>5.2.1 </span>Backend</a></li>
                            <li><a href="#workAssignmentVasilFrontend"><span>5.2.2 </span>Frontend</a></li>
                        </ol>
                    </li>

                </ol>
            </li>

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
        <section id="introduction-Purpose">
            <h3><span>1.1 </span>Purpose</h3>
            <p>
                The main purpose is the efficient visualizing of data by filtering, sorting and observing each instance in a meaningful way.
            </p>
        </section>


        <section id="introduction-Intended">
            <h3><span>1.2 </span> Intended Audience and Reading Suggestions</h3>
            <p>
                From a development standpoint this report includes general information regarding the code infrastructure and important details regarding the implementation. This may refer to code snippets, UML and other diagrams, external libraries, project structure and technologies used. From a project manager perspective, a number of sections are dedicated to explaining what was the main goals, focus and scalability in respect to our approach.
            </p>
        </section>


        <section id="introductionProduct-scope">
            <h3><span>1.3 </span>Product Scope</h3>
            <p>
                The purpose of the app is to visualize, categorize, download specific information related to a large set of data in a efficient way. The system is based on a large dataset stored in a relational database. We have a data related to United States car accidents that span between 2016-2020. For each of the accident the user has access to important details related to weather (humidity, visibility, wind, etc.), traffic conditions (stop, roundabout, giveaways etc.), duration, distance, severity and a short description. Each accident can be observed cartographically and in a form of statistical charts with the possibility of exporting each of these in formats like CSV, WEBP, SVG.
            </p>
        </section>

        <section id="introductionReferences">
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

        <section id="overallDescriptionPP">
            <h3><span>2.1 </span>Product Perspective</h3>
            <p>
                The product presents a common approach in dealing with a large set of data that needs to be visualized.
            </p>
            <p>
                The main focus is listing the results in a way that the essential information is touched.
            </p>
        </section>

        <section id="overallDescriptionProductF">
            <h3><span>2.2 </span>Product Functions</h3>

            <section id="overallDescriptionUserP">
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

            <section id="overallDescriptionAdmF">
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

        <section id="overallDescriptionUsrClCh">
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

        <section id="overallDescriptionOpEnv">
            <h3><span>2.4 </span>Operating Environment</h3>
            <ul>
                <li> Database service: MySql </li>
                <li> Client/server system </li>
                <li> Operating system: Windows </li>
                <li> Platform: PHP</li>
            </ul>
        </section>

        <section id="overallDescriptionDesignIC">
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

        <section id="overallDescriptionUDoc">
            <h3><span>2.6 </span>User Documentation</h3>

            <dl>
                <dt id="user-doc-swagger-app">See app's Swagger: </dt>
                <dd property="schema:citation" typeof="user-doc:swagger-app" resource="https://APP-ROOT-ORIGIN/swagger">
                    <cite property="schema:name"><a href="https://APP-ROOT-ORIGIN/swagger">https://APP-ROOT-ORIGIN/swagger</a></cite>.
                </dd>
            </dl>

            <dl>
                <dt id="ref_MVC_tutorial_build">Build your MVC Tutorial 1</dt>
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

        <section id="overallDescriptionAssumptionD">
            <h3><span>2.7 </span>Assumptions and Dependencies</h3>

            <section id="overallDescriptionAssumptionGen">
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

            <section id="overallDescriptionDepends">
                <h3><span>2.7.2 </span> Dependencies</h3>
                <dl>
                    <dt id="ref_MVC_tutorial_1">Canvas to SVG</dt>
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
                    <dt id="ref-OpenLayers-tutorial">OpenLayers</dt>
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
                    <dt id="ref_MVC_tutorial_3">Swagger UI</dt>
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
                    <dt id="ref_MVC_tutorial_chart">Charts</dt>
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
    <section id="extIntReq">
        <h2><span>3. </span>External Interface Requirements</h2>

        <section id="extIntReqUserInt">
            <h3><span>3.1 </span>User Interfaces</h3>
            <p>
                The product presents a common approach in dealing with a large set of data that needs to be visualized.
            </p>

            <!-- SEARCH-PAGE ->>> >>> >>>->>> >>> >>>->>> >>> >>>->>> >>> >>> -->
            <section id="extIntReqUISearchPage">
                <h3><span>3.1.1 </span> Search page</h3>
                <p>The main scope of the Search page is to offer users comprehensive insights regarding car accidents in the USA by helping them aggregate and visualize the data using filters, search and export capabilities.
                </p>

                <!-- SEARCH-PAGE ->>> RESULT ITEM TEMPLATE -->
                <section id="extIntReqUISearchPageResult">
                    <h3><span>3.1.1.1 </span> Result item template</h3>

                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/accident-card.png" alt="Result item template">
                        <figcaption>Fig. 1 - Result item template</figcaption>
                    </figure>

                    <ol>
                        <li><strong>Date and time of the accident,</strong> required not only for the chronological placement but also for creating meaningful and accurate forecasts, correlations with other events and factors that can affect the evolution of the number of the accidents.</li>
                        <li><strong>Severity</strong>, describes the severity of the accidents, starting with 1 for highly severe to 4 for the least severe.</li>
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
                <section id="extIntReqUISearchPageSearch">
                    <h3><span>3.1.1.2 </span> Search input</h3>

                    The goal of this section is to filter results using user input and access some other hidden section (e.g. the hidden filter area).
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/search-bar.png" alt="Search bar">
                        <figcaption>Fig. 2 - Search bar</figcaption>
                    </figure>

                    <ol>
                        <li><strong>Search box</strong>, offers users the possibility to search accidents by description or id.</li>
                        <li><strong>Search button</strong>, the users need to press the it after they entered the text they wish to search in order to get the desired results.</li>
                        <li><strong>Revert search button</strong>, used for reverting the search results to the standard, unfiltered status. It will not change the &quot;Sort by&quot; button status therefore the order of the results will not change.</li>
                        <li><strong>Filter button</strong>, used for displaying the filter section that helps the advanced users to retrieve more accurate and specific data.</li>
                        <li><strong>Sort button</strong>, when accessed, this button displays a list of 14 characteristics (e.g. State, Location, Severity) that can be used for sorting the results. Once the user selects one of these options, the system starts the search and then displays the results sorted by it. For reverting it, the user must select the "Sort by" option from the list.</li>
                        <li><strong>Descending order checkbox</strong>, by checking this, the results will be ordered descending or ascending if it is unchecked. The changes will be immediately visible after checking/unchecking it therefore the user does not need to press the search button again.</li>
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
                <section id="extIntReqUISearchPageFilter">
                    <h3><span>3.1.1.3 </span> Filter section</h3>
                    <p>The filter area is hidden but can be toggled using the button from the search bar described in the previous section.</p>
                    <p>The filter area is clustered into 16 different groups, and each of these has its own reset button. In this way, the user can revert a filtering criterion without affecting the others. For the results to reflect the changes after resetting a group, the user must press the Apply button or Cancel otherwise.</p>
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/filter-section.png" alt="Filter section">
                        <figcaption>Fig. 4 - Filter section</figcaption>
                    </figure>
                    <ul>
                        <li><strong>1. Filter toggle button</strong>, used for displaying the filter section.</li>
                        <li><strong>2. Reset button</strong>, has almost the same behaviour as the individual group reset button, with the difference that this resets the values for all filtering groups.</li>
                        <li><strong>3. Cancel and Apply buttons</strong>, used for applying or canceling the filtering criteria entered by the user. </li>
                        <li>
                            <strong>4. State</strong>, enables users to get the accidents only from some specific states. For this, users must press the arrow button that will pop out a window with the 49 states of the US to select the desired states (Fig. 5). After checking them, the user must press the Apply or Cancel in order for the settings to appear or not. When the Apply button is selected, the states will be shown as in Fig. 6. From this view, if the user changes their mind, he can press the x button after the state name, and it will be excluded from the filter. If the user wants to add more states, he can click the arrow button again and repeat the process.
                            <div class="inline-figures">
                                <figure>
                                    <img src="/assets/images/report/states-pop-up.png" alt="Pop up with the state list">
                                    <figcaption>Fig. 5 - Pop up with the state list</figcaption>
                                </figure>
                                <figure>
                                    <img src="/assets/images/report/selected-states.png" alt="View of the selected states">
                                    <figcaption>Fig. 5 - View of the selected states</figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <strong>5. Location (Within 15 ray)</strong>, enables users to retrieve the accidents that are located within a 15 ray of the location selected by them on the map (Fig. 6) that will pop out after clicking the arrow button from this section. In the map pop up, the user can select a location by clicking it on the map then the selected coordinates will appear in the right bottom corner. For an accurate localization, the users can zoom in or out using the mouse wheel or the "+" or "-" buttons on the left top corner. The users can visualize the different areas of the map using drag and drop movements. In the end, the user should press the Apply button if he wants to keep the settings, otherwise the Cancel button. After the selection is made, the coordinates will be shown as in Fig. 7.
                            <div class="inline-figures">
                                <figure>
                                    <img src="/assets/images/report/map-pop-up.png" alt="Pop up with the map">
                                    <figcaption>Fig. 6 - Pop up with the map</figcaption>
                                </figure>
                                <figure>
                                    <img src="/assets/images/report/selected-coordinates.png" alt="View of the selected coordinates">
                                    <figcaption>Fig. 7 - View of the selected coordinates</figcaption>
                                </figure>
                            </div>
                        </li>
                        <li><strong>6. Within Severity (*some)</strong>, allows users to retrieve only the accidents that have one of the selected severities. The users can select multiple options.</li>
                        <li><strong>7. Period</strong>, allows users to retrieve accidents that happened at specific periods of time. If both start and end date are completed, the users will get all the accidents that occurred between these dates. However, the users are not required to complete both. They can enter only the start date, and so they will get all accidents from the start date till the present moment, or only the end date if they want the accidents till a specified date.</li>
                        <li><strong>8. Distance (mi)</strong>, allows users to get the accidents that have the distance (from the crash spot to the place where the car stops) between a minimum and maximum value. The users are not required to enter both values because if only the minimum value is specified, the maximum will be implicitely the highest value in the database and vice versa.</li>
                        <li><strong>9 - 15: Temperature (F), Wind Chill (F), Humidity (%), Pressure(in), Visibility(mi), Wind speed(mph), Precipitation(in)</strong>, allows the accidents filtering by the minimum and/or maximum values of the prior named weather characteristics. The units of measurement are specified in parentheses.</li>
                        <li><strong>16. Wind Direction (*some)</strong>, fetches the accidents that happened when the wind direction was at least like one of the checked values.</li>
                        <li><strong>17. Weather Condition (*some)</strong>, helps the users fetch only the accidents that happened when the weather had at least one of the selected characteristics.</li>
                        <li><strong>18. Circumstance (*every)</strong>, gets the accidents that happened under all the selected circumstances.</li>
                        <li><strong>19. Astrological twilight (*some)</strong>, enables the filtering of the accidents by time of the day.</li>
                    </ul>
                </section>

                <!-- SEARCH-PAGE ->>> PAGINATION SECTION -->
                <section id="extIntReqUISearchPageFilterPagination">
                    <h3><span>3.1.1.4 </span> Pagination </h3>
                    <p>Because we take into account the different needs and behaviour characteristics of the site visitors, we offer them the possibility to change the number of accidents card boxes that are displayed on each page. By default, on a page are displayed 20 card boxes, but the users can choose to have on a page either 10, 20, 30 or 50 card boxes, as shown in Fig. 8.</p>
                    <p>As we work with large data sets, the user has the ability to navigate backwards and forwards using the arrow buttons or the numbered buttons (within ten pages, prior or after the current page). The current page number is coloured in wheat yellow for the user to know where he is in the search results.</p>
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/cardboxes-per-page.png" alt="Search page navigation">
                        <figcaption>Fig. 8 - Search page navigation with the option to change the elements displayed on a page</figcaption>
                    </figure>
                </section>

                <!-- SEARCH-PAGE ->>> EXPORT UI -->
                <section id="extIntReqUISearchPageExportUI">
                    <h3><span>3.1.1.5 </span> Export UI </h3>


                    <section id="extIntReqUISearchPageExportUICsv">
                        <h3><span>3.1.1.5.1 </span> Export CSV </h3>
                        <p>The user has the ability to export the wanted data in CSV format for further analysis and processing by being easily imported in more advanced data visualization or analytics tools.</p>
                        <p>After the user got the desired results by using the search and filtering options, he has to chose from two alternatives (Fig. 9):</p>
                        <figure class="report-centered-fig">
                            <img src="/assets/images/report/export-options.png" alt="Export options">
                            <figcaption>Fig. 9 - Export options</figcaption>
                        </figure>
                        <ol>
                            <li><strong>Export this page</strong>.</li>
                            <li><strong>Export all (10k results limit)</strong>, by selecting this option, the user will get a CSV file with all the search and filtering results. Due to server-side performance constraints and the extensive volume of data, we had to limit the export capabilities up to 10000 results.</li>
                        </ol>
                    </section>

                    <section id="extIntReqUISearchPageExportUIMap">
                        <h3><span>3.1.1.5.2 </span> Cartographic export and visualization </h3>

                        <p>For an accessible overview of the data, the site offers users the possibility to preview the data on the map by clicking the <strong>"MAP PREVIEW"</strong> left to the export button. In the map are shown only the accidents from the current search page.</p>

                        <figure class="report-centered-fig">
                            <img src="/assets/images/report/map-preview-window.png" alt="Map preview window">
                            <figcaption>Fig. 9 - Map preview window</figcaption>
                        </figure>

                        <p>Each accident is represented on the map as a coloured circle at the point where the accident happened. The circle is coloured according to the accident severity, starting with dark red for the most severe accidents and lowering in intensity till it reaches pale pink for the least severe ones.</p>

                        <p>By clicking on a circle on the map, a pop-up window with more information about the accident will appear. In this pop-up are included the accident date, city, id and a short description. The pop-up can be closed by pressing the <strong>"x"</strong> button.</p>
                        <p>The users can zoom in or out using the mouse wheel or the "+" or "-" buttons on the left top corner, and can visualize the different areas of the map using drag and drop movements.</p>
                        <p>The user has the ability to export the map as an SVG or WEBP file using the buttons <strong>"Export SVG"</strong> and <strong>"Export WEBP"</strong> if he wants to store and use the map later.</p>
                    </section>

                </section>

            </section>

            <!-- CHART-PAGE ->>> >>> >>>->>> >>> >>>->>> >>> >>>->>> >>> >>> -->
            <section id="extIntReqUIChartPage">
                <h3><span>3.1.2 </span> Chart page</h3>

                <p>Being able to visualize data in charts and graphs is especially useful when working with large data sets, as it's the case here. When the data is represented in a visual context, it is easier for human users to interpret it, identify trends and patterns, and reach conclusions.</p>
                <p>To help users achieve this goal, the site offers the possibility of visualizing data in three different charts described below.</p>

                <!-- CHART-PAGE ->>> Chart 'Number of cases per state' -->
                <section id="extIntReqUIChartPageChartPerState">
                    <h3><span>3.1.2.1 </span> Chart 1: Number of cases per state </h3>

                    <p>This doughnut chart gives a comparative overview of the number of accidents for each state by putting them in contrast with each other.</p>
                    <p>By hovering over each chart slice, a tooltip with the state name and accidents number will appear to provide more insights.</p>
                    <p>The legend is situated in the top part of the chart and contains the states name and the associated colour. From here the user can also interact with the chart excluding/including different states from/in this visualization by clicking on the state name or colour. When an item is excluded from the chart, it will be marked with a strikethrough.</p>

                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/chart-number-of-cases-per-state.png" alt="Chart 1: Number of cases per state">
                        <figcaption>Fig. 10 - Chart 1: Number of cases per state</figcaption>
                    </figure>

                </section>


                <!-- CHART-PAGE ->>> Chart severity -->
                <section id="extIntReqUIChartPageChartSeverity">
                    <h3><span>3.1.2.2 </span> Chart 2: Number of cases grouped by severity overall and per state</h3>
                    <p>In this pie chart is highlighted the distribution of accidents by severity. Here, the users are able to visualise this distribution per total or at the state level by selecting this from the drop-down list in the top left of the chart.</p>
                    <p>As was the case for the previous chart, when the user hovers its mouse over a chart slice, it will appear a tooltip with the severity type and the number of accidents.</p>
                    <p>The legend is situated at the top of the chart and depicts the severity types and the associated colours. By clicking the name or the colour of an element, it will be excluded from the chart and marked with a strikethrough.</p>
                    <div class="inline-figures">
                        <figure style="width: 49.3%;">
                            <img src="/assets/images/report/chart-number-of-cases-by-severity-overall.png" alt="Chart 2: Overall number of cases grouped by severity">
                            <figcaption>Fig. 11 - Chart 2: Overall number of cases grouped by severity</figcaption>
                        </figure>
                        <figure style="width: 49.3%;">
                            <img src="/assets/images/report/chart-number-of-cases-by-severity-north-carolina.png" alt="Chart 2: Number of cases grouped by severity for North Carolina with the severity one excluded">
                            <figcaption>Fig. 12 - Chart 2: Number of cases grouped by severity for North Carolina with the severity one excluded</figcaption>
                        </figure>
                    </div>
                </section>

                <!-- CHART-PAGE ->>> CHART Timeline -->
                <section id="extIntReqUIChartPageTimeline">
                    <h3><span>3.1.2.3 </span> Chart 3: Timeline of cases per year </h3>

                    <p>This line chart offers a comparative visualization of the monthly evolution of the number of accidents for each year.</p>
                    <p>The horizontal axis depicts the time progression in months, and on the vertical one, the number of accidents.</p>
                    <p>When the users hover over the month points on the lines, will appear a tooltip with the name of the year and the number of accidents for the selected month.</p>
                    <p>At the top of the chart is the legend with the years and their colour. By clicking a legend element, this will be excluded/included from/in the chart. The excluded items are marked with a strikethrough.</p>
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/chart-timeline-of-cases-per-year.png" alt="Chart 1: Number of cases per state">
                        <figcaption>Fig. 13 - Chart 3: Timeline of accidents per year</figcaption>
                    </figure>
                </section>

                <!-- CHART-PAGE ->>> EXPORT SECTION -->
                <section id="extIntReqUIChartPageExport">
                    <h3><span>3.1.2.4 </span> Export chart</h3>
                    <p>If the user wants to store the chart for future use, he has the ability to export the image in WEBP or SVG format. Also, the chart data can be exported in CSV format for further processing. All third options can be accessed in the right section of the charts, in the export section.</p>
                    <figure class="report-centered-fig">
                        <img src="/assets/images/report/chart-page.png" alt="The export section from chart page">
                        <figcaption>Fig. 14 - The export section from chart page</figcaption>
                    </figure>
                </section>
            </section>
            <section id="adminLoginPanel">
                <h3><span>3.1.3 </span> Admin Login page</h3>
                <p>For an Administrator this page can be one of the most important between him and his tasks. The design of this
                    page it's simple and easy to use. This interface consists in two text boxes, 1 check box and 1 button. Selecting "remember me" in the
                    back-end the page will save your details (Token, User and Check) for next time to pass the login page until you press logout. The main function
                    of this page is to generate a token who will help you to remain connected in the interface using the end-points. In case you select
                    to remain connected, the token will be saved after. In other case at every login a new token will be created.</p>
                <img src="/assets/images/report/admin-login.png"
                     alt="Login Page">
            </section>
            <section id="LoginPageMainPage">
                <h3><span>3.1.4 </span> Admin Panel Main Page</h3>

                <p>This page it's just a simple bridge between login and the interface for the Administrator. Here you can
                    find a small preview what can do each page of the admin panal. The main part of this page it, the token
                    verification what happen every time page is reloaded or when someone enter trough link. Pictures in this page
                    are clickable and they send you directly into the page you selected.</p>
                <img src="/assets/images/report/admin-adminpanel.png" height="75%" width="75%"
                     alt="Admin Panel Main Page">
            </section>
            <section id="LoginMaintenanceMode">
                <h3><span>3.1.5 </span> Maintenance Mode Page</h3>

                <p>The Maintenance Mode page we can say it's one of the important features of this website. In case any problems
                    appear we can easily turn on this mode selecting enable check box and pressing submit. This page works with
                    the help of the database and with the end-points. When you get into the page first thing that will happen will
                    be the message with the description of the maintenance mode will load, and the check boxes will get selected accordingly
                    with the status of the system. One main feature is this system doesn't affect the administration pages and you can still
                    work on your database when the users can't access the interfaces. Every operation executed trough this page will verify
                    your token.</p>
                <img src="/assets/images/report/admin-maintenancemode.png" height="75%" width="75%"
                     alt="Admin Panel Main Page">
            </section>
            <section id="LoginDatabaseEditor">
                <h3><span>3.1.6 </span> Database Editor Page</h3>

                <p>The Maintenance Mode page we can say it's one of the important features of this website. In case any problems
                    appear we can easily turn on this mode selecting enable check box and pressing submit. This page works with
                    the help of the database and with the end-points. When you get into the page first thing that will happen will
                    be the message with the description of the maintenance mode will load, and the check boxes will get selected accordingly
                    with the status of the system. One main feature is this system doesn't affect the administration pages and you can still
                    work on your database when the users can't access the interfaces. Every operation executed trough this page will verify
                    your token.</p>
                <img src="/assets/images/report/admin-database-add.png" height="75%" width="75%"
                     alt="Admin Panel Main Page">
                <p>With editor mode, you put the row's ID and you will get into the editor menu. It's a usefull function in case
                you added something wrong.</p>
                <img src="/assets/images/report/admin-edit.png" height="75%" width="75%"
                     alt="Admin Panel Main Page">
                <p>With ID Remover you can remove any ID existent in the database. With Range ID function you can select a minimum, and
                a maximum and all values between that will get added.</p>
                <img src="/assets/images/report/admin-remove.png" height="75%" width="75%"
                     alt="Admin Panel Main Page">

            </section>
            <section id="LoginAccountsManager">
                <h3><span>3.1.6 </span> Accounts Manager Page</h3>

                <p>The Accounts Manager page it's used to add new admin accounts, remove them or edit the password of them.
                    This function it's efficient in case it's a security breach or in case another admin forget about it's own password.</p>
                <img src="/assets/images/report/admin-accounts.png" height="75%" width="75%"
                     alt="Admin Panel Main Page">
            </section>
        </section>
            <!-- INSERT NEXT PAGE ->>> >>> >>>->>> >>> >>>->>> >>> >>>->>> >>> >>> -->
        </section>

        <section id="extIntReqHardware">
            <h3><span>3.2 </span>Hardware interfaces</h3>
            <ul>
                <li> A device that supports Windows 10, Internet connection and the latest version of Chrome browser.</li>
            </ul>
        </section>

        <section id="extIntReqSoftware">
            <h3><span>3.3 </span>Software interfaces</h3>

            <section id="extIntReqOperatingSys">
                <h3><span>3.3.1 </span>Operating system</h3>
                <p>
                    We've chosen <i>Windows</i> as the primary operating system because is widely available, and thus reaches a large pool of audiences. It's is also very familiar, and supports a lot of services.
                </p>
            </section>

            <section id="extIntReqDatabase">
                <h3><span>3.3.2 </span>Database</h3>
                <p>
                    <i>MySql</i>
                </p>
            </section>

            <section id="extIntReqPlatform">
                <h3><span>3.3.3 </span>Platform</h3>
                <p>
                    PHP ^v7.3. PHP is easy to use and has a lot of build in functionalities.
                </p>
            </section>

            <section id="extIntReqOpenLayers">
                <h3><span>3.3.4 </span>Open Layers</h3>
                <p>
                    Open Layers is a fast API, with a rich documentation, and a community behind.
                </p>
            </section>

            <section id="extIntReqChart">
                <h3><span>3.3.4 </span>Chart Js</h3>
                <p>
                    Offers high quality, responsive drawings. Has a great approach in object abstraction, which makes for a easy going process of modeling the database rows into comprehensive drawings.
                </p>
            </section>

            <section id="extIntReqCanvas2Svg">
                <h3><span>3.3.5 </span>Canavs2Svg Js</h3>
            </section>
        </section>
    </section>

    <!-- Other Nonfunctional Requirements -->
    <section id="devGuide">
        <h2><span>4.Developer guide</span></h2>

        <!-- MVC ARCHITECTURE -->
        <section id="devGuideMVC">
            <h2><span>4.1 MVC Architecture </span></h2>
            <p>
                The architecture rests on a hierarchy of classes provided in the <i> Fig. 5.1 </i>. The folder structure and naming convention are important for the this app to work.
            </p>

            <figure class="report-centered-fig">
                <img src="/assets/images/report/uml/mvc-infrastructure.png" alt="mvc-architecture">
                <figcaption>Fig. 5.1 - MVC Architecture UML</figcaption>
            </figure>

            <section id="devGuideMVCApp">
                <h2><span>4.1.1 App </span></h2>
                <p>
                    The class that is inherited by both Model and Controller classes. Its purpose is to provide access to the Router and Database singleton instances evenly.
                </p>
            </section>

            <section id="devGuideMVCRouter">
                <h2><span>4.1.2 Router </span></h2>
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

            <section id="devGuideMVCDatabase">
                <h2><span>4.1.3 Database </span></h2>
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

            <section id="devGuideMVCController">
                <h2><span>4.1.4 Controller </span></h2>
                <p>
                    Represents the base class for all controllers.
                </p>
                <ul>
                    <li>
                        <strong>Model</strong> loading. An important use of this class is the loading of models via <i>loadModel</i> method. All the logic is intended to get pass to the model instance. The controller is intended to call the needed methods and receive a response then print it on the screen.
                    </li>

                    <li>
                        <strong>View loading</strong>. Via <i>loadView</i> method a view file is imported. Any view has a PHP associative array named (<i>$BLOCK</i>), that can be used for server side rendering. The server side rendering is used for rendering certain ui (in limited amounts). A plain string from the server echoed in the view is not advised, as is harder to trace by the naked eye or by the IDE, easy to break and hard to extend. Data fetched via time consuming operations are left for javascript and Ajax requests, which are handling that more smoothly. The server rendering is used for avoiding repetitive code (see the search view) or other small UI elements (see charts view), with HTML and PHP separation.
                    </li>

                    <li>
                        regulates which page is allowed based on authentication or maintenance status
                    </li>

                    <li>
                        regulates which request method is allowed for a given endpoint
                    </li>
                </ul>
            </section>

            <section id="devGuideMVCModel">
                <h2><span>4.1.5 Model </span></h2>
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
        <section id="devGuideSearchService">
            <h2><span>4.2 Search Page Service </span></h2>
            <p>
                This section explains the <a href="/search" target="_blank"> search page </a> and its related API.The functionality is concentrating around the <i>SearchModel</i>.
            </p>

            <figure class="report-centered-fig">
                <img src="/assets/images/report/uml/search-model-uml.png" alt="search-model-uml">
                <figcaption>Fig. 5.2 - SearchModel UML</figcaption>
            </figure>


            <section id="devGuideSearchServiceResults">
                <h2><span>4.2.1 Results </span></h2>
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

            </section>

            <section id="devGuideSearchServiceFilters">
                <h2><span>4.2.2 Filters </span></h2>
                <p>
                    This /filters endpoint is explained in great details in the <a href="/swagger#/search/filters" target="_blank">swagger</a>.
                </p>

                <p> The <i> Filter </i> entity is the base for search feature and has a large spectrum of abstraction. Each filter starts from a default configuration, consisting of options with empty value fields. Some filters need to consult the database information to fetch its options. </p>

                <figure class="report-centered-fig">
                    <img src="/assets/images/report/uml/accident-entity-uml.png" alt="search-model-uml">
                    <figcaption>Fig. 5.3 - Filter entity UML</figcaption>
                </figure>

                <section id="devGuideSearchServiceFiltersRoles">
                    <h2><span>4.2.2.1 Roles </span></h2>
                    <ul>
                        <li>
                            Provides the frontend with recognized entities. The frontend knows to paint each filter by instantiating its own entities, that are rendering themselves. This gives to the backend enough freedom to add a lot of new filters without anything new being implemented in the frontend.
                        </li>

                        <li>
                            Sql query building. Each filter has a private property that indicates which column of the database it can impact (<i>bind</i>). Some filters can have their options bind to a certain column, instead of the overall filter. The important identifiers of a filter is its key and the key property of its individual options. The client receives the default filters (Note: only the public fields). The user modifies those filters in the frontend part. When a search is triggered, the client preserves the overall structure of the filters and sends them updated with with new values. The server re-creates the default filters (without fetching from the database), and matches them (by key) with the client data, and only updates the value fields of a filter, which are escaped or casted (for non-string types) in order to avoid injections. The mysql syntax permits wrapping values in apostrophe, regardless of the type, and that's making the escape safe from injection. Using this arrangement the column that is bind to a filter is determined without client knowledge. Each filter can create a conditional part of a sql statement, and get joined within AND's.
                        </li>
                    </ul>
                </section>

                <section id="devGuideSearchServiceFiltersMentions">
                    <h2><span>4.2.2.2 Other mentions </span></h2>
                    <ul>
                        <li>
                            the result item (<i>Fig. 1</i>) is generated using service side rendering. When rendering results, the frontend associates an instance of a class to a html node with a generic structure, that permits updates of inner elements using an attribute scheme for matching. In the php file a N-list of such nodes are rendered (hidden) in a for loop, keeping PHP and HTML code separated. These nodes are then ready on page load and are to be attached to Js instances, filled with information and showed.
                        </li>

                        <li>
                            The code is documented via PHP-doc and JsDoc.
                        </li>
                    </ul>
                </section>
            </section>
        </section>

        <!-- CHAR PAGE SERVICE -->
        <section id="devGuideChartPageService">
            <h2><span>4.3 Chart Page Service </span></h2>
            <p>
                This section explains the <a href="/charts" target="_blank"> charts page </a> and its related API.The functionality is concentrating around the <i>ChartModel</i>.
            </p>

            <figure class="report-centered-fig">
                <img src="/assets/images/report/uml/chart-model-uml.png" alt="chart-model-uml">
                <figcaption>Fig. 5.5 - ChartModel UML</figcaption>
            </figure>


            <p>
                The main entity, <i>ChartEntity</i>, is modeled exactly after the parameters accepted by the <a href="#ref_MVC_tutorial_chart"><i>ChartJs</i></a> library. To better understand how to use this entity, please consult the <a href="https://www.chartjs.org/docs/latest/" target="_blank">library documentation</a>.
            </p>

            <figure class="report-centered-fig">
                <img src="/assets/images/report/uml/chart-entity-uml.png" alt="chart-entity-uml">
                <figcaption>Fig. 5.6 - CharEntity UML</figcaption>
            </figure>


            <p>
                Chart related endpoints are explained in great details in the <a href="/swagger#/charts" target="_blank">swagger</a>.
            </p>

            <p>
                The backend part constructs various chart data using available dataset and models them by the established library guidelines.
            </p>
        </section>

        <!-- EXPORT PAGE SERVICE -->
        <section id="devGuideExportService">
            <h2><span>4.4 Export </span></h2>
            <p>
                This section gives a general overview of export functionality.
            </p>
            <p>

            <p> The exports are used in various part of the app (see the above <a href="#overallDescription">section</a>). There are several types of export formats:</p>
            <ul>
                <li>
                    CSV. This format is done server side and uses default PHP functions that can be consulted in the manual.
                </li>

                <li>
                    WEBP. This is done in the frontend part and it relates to largely supported Javascript features of the Canvas API, which offers a large pool of options.
                </li>

                <li>
                    SVG. This format uses the same Js features as the Webp option, but is decorated by a third-party library, <a href="#ref_MVC_tutorial_1">Canvas2Svg</a>.
                </li>
            </ul>
        </section>

        <!-- DATABASE CONFIGURATION -->
        <section id="devGuideDatabaseConfiguration">
            <h2><span>4.5 Database Configuration </span></h2>
            <p>
                The database can be imported using the file provided at <strong><i>documentation/Setup/acs_tw.sql.gz</i></strong>.
            </p>
            <p>
                The import contains only 200 thousands records, subset of the whole dataset. If you want to use the whole dataset, is available in csv format at <a href="https://www.kaggle.com/sobhanmoosavi/us-accidents">https://www.kaggle.com/sobhanmoosavi/us-accidents</a>. A import script is implemented at <i>DatabaseUtl.phpCsvToDb()</i>.
            </p>
        </section>

    </section>

    <!-- Other Assignments -->
    <section id="workAssignment">
        <h2><span>5.Work assignments</span></h2>

        <section id="workAssignmentDiac">
            <h2><span>5.1 Diac P. Gabriel </span></h2>
            <section id="workAssignmentDiacBackend">
                <h2><span>5.1.1 Backend </span></h2>
                <ul>
                    <li> MVC infrastructure </li>
                    <li> Swagger installation </li>
                    <li> Swagger annotations of the endpoints worked on </li>
                    <li> Search page - algorithm design, object modeling, filter and search endpoints, parts of the export </li>
                    <li> Chart page - algorithm design, object modeling, all related endpoints and UI</li>
                </ul>
            </section>

            <section id="workAssignmentDiacFrontend">
                <h2><span>5.1.2 Frontend </span></h2>
                <ul>
                    <li>Search page - algorithm and UX design, javascript code related to filtering results, pagination, loading results, cartographic representations, most of the UI elements that interact with the user (search, clear, filter toggle, apply/clear/cancel filters controls, pagination controls, export dropdown, sort and sort by selectors) </li>

                    <li>Chart page - algorithm and UX design changes, UI elements, and Javascript classes </li>
                </ul>
            </section>
        </section>

        <section id="workAssignmentGradinariu">
            <h2><span>5.2 Gradinariu Marian-Florin </span></h2>
            <section id="workAssignmentGradinariuBackend">
                <h2><span>5.2.1 Backend </span></h2>
                <ul>
                    <li> MVC infrastructure - Controllers</li>
                    <li> Account Manager - Page Design, object modeling, UI elements, token end-point</li>
                    <li> Login Page - Design, object modeling, UI elements, login and token end-point</li>
                    <li> DatabaseEditor Page - Algorithms and token, edit, remove, add end-points.</li>
                    <li> MaintenanceMode Page - Algorithms, data transfer and database manipulation with end-points to modify text and activate maintenance mode.</li>
                    <li> AdminPage - Algorithms and token end-points</li>
                </ul>
            </section>

            <section id="workAssignmentGradinariuFrontend">
                <h2><span>5.2.2 Frontend </span></h2>
                <ul>
                    <li> Charts Page - Design</li>
                    <li> Account Manager - Design, UI and JavaScript</li>
                    <li> Login Page - Design, UI and JavaScript</li>
                    <li> Database Editor Page - Design, UI and JavaScript</li>
                    <li> MaintenanceMode Page - Design, UI and JavaScript</li>
                    <li> Admin Page - Design, UI and css files</li>
                </ul>
            </section>
        </section>

        <section id="workAssignmentVasil">
        <h2><span>6.3 Vasilica Alex </span></h2>
            <section id="workAssignmentVasilBackend">
                <h2><span>6.3.1 Backend </span></h2>
                <ul>
                    <li>Import CSV to the database</li>
                    <li>Export model</li>
                </ul>
            </section>

            <section id="workAssignmentVasilFrontend">
                <h2><span>6.3.2 Frontend </span></h2>
                <ul>
                    <li>General design for the website</li>
                    <li>Search page - Reusable cards for accidents Info</li>
                </ul>
            </section>
        </section>
    </section>
</body>

</html>