<!DOCTYPE html>
<html lang="en" class=" vjvxerws idc0_330">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Report</title>
    <link rel="stylesheet" href="/assets/packages/scholarly/css/scholarly.min.css">
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
            <li><a href="#abstract"><span>1. </span>Abstract</a></li>
            <li><a href="#introduction"><span>2. </span>Introduction</a></li>
            <li><a href="#structure"><span>3. </span>Structure</a>
                <ol role="directory">
                    <li><a href="#Root"><span>3.1 </span>The root and <code>head</code></a></li>
                    <li><a href="#article"><span>3.2 </span>The <code>article</code></a></li>
                    <li><a href="#hunk"><span>3.3 </span>Hunk Elements</a>
                        <ol role="directory">
                            <li><a href="#figures"><span>3.3.1 </span>Figures</a></li>
                        </ol>
                    </li>
                    <li><a href="#inline"><span>3.4 </span>Inline Elements</a></li>
                    <li><a href="#references"><span>3.5 </span>References</a></li>
                    <li><a href="#interactive"><span>3.6 </span>Interactive Elements</a></li>
                    <li><a href="#HTMLRoles"><span>3.7 </span>HTML Roles</a></li>
                    <li><a href="#validate"><span>3.8 </span>Validation</a></li>
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
                Tzviya Siegman (Wiley)
                &amp;
                <a href="http://berjon.com/">Robin Berjon</a>,
                <a href="https://twitter.com/robinberjon">@robinberjon</a>
                (<a href="http://science.ai/">science.ai</a>)
            </dd>
            <dt>Bugs &amp; Feedback</dt>
            <dd>
                <a href="https://github.com/w3c/scholarly-html/issues">Issues and PRs welcome!</a>
            </dd>
            <dt>Discussion Group</dt>
            <dd>
                The <a href="https://www.w3.org/community/scholarlyhtml/">Report Community
                    Group</a> at <a href="https://w3.org/">W3C</a>
                (<a href="https://lists.w3.org/Archives/Public/public-scholarlyhtml/">email archives</a>)
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


            <!-- COMMMENT--------------------- DELETE -->
            <p style="color:red;">
                different types of reader that the document is intended fo </br>
                Suggest a sequence for reading the document, </br>
                REMEMBER -> SCURTATURA CATRE SECTIUNE DE INTERES PT DEVELOPER </br>
                valideaza documentul </br>
                vezi cu id-urile la fiecare sectiune </br>
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

            <section id="overallDescription-ProductPerspective-1">
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

                <li> Casual user. He is mostly curios and want to have a high-level overview. He is not interested in the whole net of feature, but mostly on a random subset of them. He may be very interested in the graphic representations and user friendly interfaces. </li>

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
                <dt id="ref-MVC-tutorial-1">Build your MVC Tutorial 1</dt>
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

            <section id="overallDescription-AssumptionsDependencies">
                <h3><span>2.7.1 </span> General assumptions</h3>

                <ul>
                    <li> the external libraries used are for the time being are open for free usage </li>
                    <li> the developers would not want to make this website single page app </li>
                    <li> the api endpoints (that relates to the dataset readyOnly functions) are open for anyone to use, and are not restricted by anything </li>
                    <li> the developers would not want to lower the version of PHP from v7.3.27 </li>
                    <li> the app is restrained to car accidents and the whole theme and features are linked together in this spirit </li>
                    <li> this app works with a single dataset and it's heavily dependent on the existence of certain fields (like latitude, longitude, etc) </li>
                    <li> this app works in the geographical context of the United State and requires a lot of work to a more broader spectrum </li>
                </ul>
            </section>

            <section id="overallDescription-AssumptionsDependencies">
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
                    <dt id="ref-MVC-tutorial-1">OpenLayers</dt>
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
                    <dt id="ref-MVC-tutorial-1">Swagger UI</dt>
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
                    <dt id="ref-MVC-tutorial-1">Charts</dt>
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
    <section id="overallDescription">
        <h2><span>3. </span>External Interface Requirements</h2>

        <section id="overallDescription-ProductPerspective">
            <h3><span>3.1 </span>User Interfaces</h3>
            <p>
                The product presents a common approach in dealing with a large set of data that needs to be visualized.
            </p>

            <!-- SEARCH-PAGE ->>> >>> >>>->>> >>> >>>->>> >>> >>>->>> >>> >>> -->
            <section id="overallDescription-AssumptionsDependencies">
                <h3><span>3.1.1 </span> Search page</h3>
                <p>
                    [...purpose...]
                </p>

                <!-- SEARCH-PAGE ->>> RESULT ITEM TEMPLATE -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.1.1 </span> Result item template</h3>
                    <p>
                        [...image with legend..]
                    </p>
                    <ul>
                        <li> 1. Title element:... </li>
                        <li> other fields an meaning</li>
                    </ul>
                </section>

                <!-- SEARCH-PAGE ->>> INPUT SECTION -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.1.1 </span> Search input</h3>
                    <p>
                        The goal of this section is to filter results using user input and access some other hidden section (the filter section that is hidden).
                    </p>
                    <p>
                        The buttons and inputs are disabled while a search is in progress. Another indicator of a search being in progress is the loader present in place of the results.
                    </p>
                    <ul>
                        <li> UI 1. Explanation </li>
                        <li> UI 2. Explanation </li>
                        <li> UI 3. Explanation </li>
                    </ul>
                </section>

                <!-- SEARCH-PAGE ->>> FILTER SECTION -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.1.2 </span> Filter section</h3>
                    <p>
                        This section is hidden but can be toggled using the button described the previous section.
                    </p>

                    <p>
                        decribe appling the filter, cancel button behavior, reseting the filters
                    </p>

                    <p> There are a variety of filters. </p>

                    <section id="overallDescription-AssumptionsDependencies">
                        <h3><span>3.1.1.2.1 Checkbox types</span> </h3>
                        <p>
                            From a point of impact, some filters can display multiple options to be selected. Some of these filters are marked as "every", meaning that each item must satisfy all options selected simultaneously. Some are marked as "some", meaning that a result will be displayed if at least one options is satisfied. In both of these types if no options is chosen they are ignored completely.
                        </p>

                        <p>
                            further describe and list them (state filter focus)
                        </p>
                    </section>

                    <section id="overallDescription-AssumptionsDependencies">
                        <h3><span>3.1.1.2.2 Location</span> </h3>
                        <p>
                            describe and list them
                        </p>
                    </section>

                    <section id="overallDescription-AssumptionsDependencies">
                        <h3><span>3.1.1.2.3 Date</span> </h3>
                        <p>
                            describe and list them
                        </p>
                    </section>

                    <section id="overallDescription-AssumptionsDependencies">
                        <h3><span>3.1.1.2.4 Range</span> </h3>
                        <p>
                            describe and list them
                        </p>
                    </section>
                </section>

                <!-- SEARCH-PAGE ->>> PAGINATION SECTION -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.1.3 </span> Pagination </h3>
                    <p>
                        describe how many per page (3 options 10, 20, 50) </br>
                        when filters are changing pagination resets
                    </p>
                </section>

                <!-- SEARCH-PAGE ->>> EXPORT UI -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.1.4 </span> Export UI </h3>
                    <p>
                        describe that results from the page are exported (that are filtered)
                    </p>

                    <section id="overallDescription-AssumptionsDependencies">
                        <h3><span>3.1.1.4.1 </span> Export CSV </h3>
                        <p>
                            describe and show something
                        </p>
                    </section>

                    <section id="overallDescription-AssumptionsDependencies">
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
            <section id="overallDescription-AssumptionsDependencies">
                <h3><span>3.1.2 </span> Chart page</h3>
                <p>
                    [...purpose...]
                </p>

                <!-- CHART-PAGE ->>> Chart 'Number of cases per state' -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.2.1 </span> Chart number of cases per state </h3>
                    <p>
                        image and describe interaction
                    </p>
                </section>


                <!-- CHART-PAGE ->>> Chart severity -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.2.2 </span> Chart severity </h3>
                    <p>
                        image and describe (how can you see result OVERALL or PER STATE), describe interactions
                    </p>
                </section>

                <!-- CHART-PAGE ->>> CHART Timeline -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.2.3 </span> Chart timeline </h3>
                    <p>
                        describe 4 curbes for each year (2016-2020)</br>

                        describe interaction
                    </p>
                    <p>
                </section>

                <!-- CHART-PAGE ->>> EXPORT SECTION -->
                <section id="overallDescription-AssumptionsDependencies">
                    <h3><span>3.1.2.4 </span> Export chart</h3>
                    <p>
                        show image and say that can be exported...
                    </p>
                </section>
            </section>
            <!-- INSERT NEXT PAGE ->>> >>> >>>->>> >>> >>>->>> >>> >>>->>> >>> >>> -->
        </section>

        <section id="overallDescription-ProductPerspective">
            <h3><span>3.2 </span>Hardware interfaces</h3>
            <p>
                describe
            </p>
        </section>

        <section id="overallDescription-ProductPerspective">
            <h3><span>3.3 </span>Software interfaces</h3>

            <section id="overallDescription-ProductPerspective">
                <h3><span>3.3.1 </span>Operating system</h3>
                <p> use this site for this section:
                    </br> https://krazytech.com/projects/sample-software-requirements-specificationsrs-report-airline-database
                </p>
                <p>
                    We choose Windows as the primary operating system because is widely available, reach audiences, is familiar, [insert other motivation] etc.
                </p>
            </section>

            <section id="overallDescription-ProductPerspective">
                <h3><span>3.3.2 </span>Database</h3>
                <p>
                    Sql, storing data, idk
                </p>
            </section>

            <section id="overallDescription-ProductPerspective">
                <h3><span>3.3.3 </span>Platform</h3>
                <p>
                    PHP, [insert motivation]
                </p>
            </section>

            <section id="overallDescription-ProductPerspective">
                <h3><span>3.3.4 </span>Open Layers</h3>
                <p>
                    maps javascript describe motivation
                </p>
            </section>

            <section id="overallDescription-ProductPerspective">
                <h3><span>3.3.4 </span>Chart JS</h3>
                <p>
                    javascript describe motivation
                </p>
            </section>

            <section id="overallDescription-ProductPerspective">
                <h3><span>3.3.5 </span>Other libraries JS</h3>
                <p>
                    describe
                </p>
            </section>
        </section>

        <section id="overallDescription-ProductPerspective">
            <h3><span>3.4 </span>Communications interfaces</h3>
            <p>Describe </p>
        </section>
    </section>


    <!-- SYSTEM FEATURES -->
    <section id="overallDescription">
        <h2><span>4. System Features </span></h2>
        <p>
            insert sections with use cases for each interactions (search, export etc)
        </p>
    </section>

    <!-- Other Nonfunctional Requirements -->
    <section id="overallDescription">
        <h2><span>5.Developer guide</span></h2>

        <section id="overallDescription">
            <h2><span>5.1 MVC Architecture </span></h2>
            <p>
                uml and other stuff
            </p>
        </section>

        <section id="overallDescription">
            <h2><span>5.2 Database entities </span></h2>
            <p>
                uml and other stuff
            </p>
        </section>

        <section id="overallDescription">
            <h2><span>5.3 INSERT YOUR stuff and umls, diagrams, etc </span></h2>
            <p>
                uml and other stuff
            </p>
        </section>
    </section>

    <!-- Other Assignments -->
    <section id="overallDescription">
        <h2><span>6.Work assignments</span></h2>

        <section id="overallDescription">
            <h2><span>6.1 Diac P. Gabriel </span></h2>
            <ul>
                <li>describe 1</li>
            </ul>
        </section>

        <section id="overallDescription">
            <h2><span>6.2 Gradinariu Marian-Florin </span></h2>
            <ul>
                <li>describe 1</li>
            </ul>
        </section>

        <section id="overallDescription">
            <h2><span>6.3 Vasilica Alex </span></h2>
            <ul>
                <li>describe 1</li>
            </ul>
        </section>
    </section>

    </section>
</body>

</html>