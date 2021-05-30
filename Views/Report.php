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
                REMEMBER -> SCURTATURA CATRE SECTIUNE DE INTERES PT DEVELOPER</p>

        </section>


        <section id="hunk">
            <h3><span>1.3 </span>Product Scope</h3>
            <p>
                Mai vedem.
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
            </ul>
        </section>

        <section id="overallDescription-OperatingEnvironment">
            <h3><span>2.4 </span>Operating Environment</h3>
            <p> The app is hosted an a server based on Apache, MySql, PHP. The app is available in a optimal state in the Chrome Browser, on Windows and Android operating systems, at the current available version for the time being (May 2021). </p>
        </section>

        <section id="overallDescription-DesignImplementation">
            <h3><span>2.5 </span>Design and Implementation Constraints</h3>
            <p> There are several constraints to be consider: </p>
            <ul>
                <li> Browser compatibility. The app needs further integration with IOS, or lesser used or old version browsers. This issues are raised by Javascript unsupported implementations from our developers or from third party libraries. Further testing will have to be done. </li>
                <li> The increase of the information volume may slow down the performance and have a greater need for network resources. </li>
                <li> Difficult UX solutions for mobile users (easy navigation). </li>
                <li> All images exports are based on the Canvas API so cross-origin use is to be considered while making migrations. </li>
                <li> The project is not equipped to connect to multiple databases</li>
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
                    <li> this app works with a single dataset and it's heavily dependent on the existence of certain fields (like latitude, longitude) </li>
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
</body>

</html>