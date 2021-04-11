# IEEE-Tempate
IEEE System Requirements Specification Template

# Software Requirements Specification
## For  USA Accidents Smart Visualizer
Version 1.0 approved
Prepared by Gradinariu Florin-Marian, Vasilica Alex, Diac Gabrial

Table of Contents
=================
  * [Revision History](#revision-history)
  * [Introduction](#1-introduction)
    * 1.1 [Purpose](#11-purpose)
    * 1.2 [Document Conventions](#12-document-conventions)
    * 1.3 [Intended Audience and Reading Suggestions](#13-intended-audience-and-reading-suggestions)
    * 1.4 [Product Scope](#14-product-scope)
  * [Overall Description](#overall-description)
    * 2.1 [Product Perspective](#21-product-perspective)
    * 2.2 [Product Functions](#22-product-functions)
    * 2.3 [User Classes and Characteristics](#23-user-classes-and-characteristics)
    * 2.4 [Operating Environment](#24-operating-environment)
    * 2.5 [Design and Implementation Constraints](#25-design-and-implementation-constraints)
    * 2.6 [User Documentation](#26-user-documentation)
    * 2.7 [Assumptions and Dependencies](#27-assumptions-and-dependencies)
  * [External Interface Requirements](#external-interface-requirements)
    * 3.1 [User Interfaces](#31-user-interfaces)
    * 3.2 [Hardware Interfaces](#32-hardware-interfaces)
    * 3.3 [Software Interfaces](#33-software-interfaces)
  * [Other Nonfunctional Requirements](#other-nonfunctional-requirements)
    * 4.1 [Performance Requirements](#51-performance-requirements)
    * 4.2 [Safety Requirements](#52-safety-requirements)
    * 4.3 [Security Requirements](#53-security-requirements)
    * 4.4 [Software Quality Attributes](#54-software-quality-attributes)



## 1. Introduction
### 1.1 Purpose 
Offer a way to visualize a countrywide car accident presentaion of a dataset, which covers 49 states of the USA. The accident data are collected from February 2016 to Dec 2020, using two APIs that provide streaming traffic incident (or event) data. 

Acknowledgements
Please cite the following papers if you use this dataset:

Moosavi, Sobhan, Mohammad Hossein Samavatian, Srinivasan Parthasarathy, and Rajiv Ramnath. “A Countrywide Traffic Accident Dataset.”, 2019.

Moosavi, Sobhan, Mohammad Hossein Samavatian, Srinivasan Parthasarathy, Radu Teodorescu, and Rajiv Ramnath. "Accident Risk Prediction based on Heterogeneous Sparse Data: New Dataset and Insights." In proceedings of the 27th ACM SIGSPATIAL International Conference on Advances in Geographic Information Systems, ACM, 2019.

### 1.2 Document Conventions
This documents has no deviations from the standard text.

### 1.3 Intended Audience and Reading Suggestions
The audience targeted are readers curios to measure how the situation in traffic.

### 1.4 Product Scope
The product goals are to visualy represent the situation described by the datasets.  


## Overall Description
### 2.1 Product Perspective
The product is a standalone application that relies on itself to display information. 

### 2.2 Product Functions
  #### - listing of accidents with details such as description, title, location
  #### - searchable and filter-able list
  #### - chartographic representation of accidents
  #### - chart representation of accidents

### 2.3 User Classes and Characteristics
The application is public and does have just one user class, the 'reader'.

### 2.4 Operating Environment
PHP 7 as server side. Javascript, HTML, CSS for frontend. 

### 2.5 Design and Implementation Constraints
We added constrains on items resizing and we depend on a database. For design we used css and js, and for charts we used a module who create charts based on differents factors from the database.

### 2.6 User Documentation
On our software we will add for documentation a manual page.

### 2.7 Assumptions and Dependencies
We only depend on Chart.js for creating the charts and google maps to get the world map for our states.

## External Interface Requirements
### 3.1 User Interfaces
Our interface include a graphical map to see the car accidents from each state. A search function to find informations about each category of accidents our users want. A interface for our users to interact with our charts.
### 3.2 Hardware Interfaces
The interface between user and our software it's trough web browsers. This can be used on smartphones, tablets and pc's.
### 3.3 Software Interfaces
The only interface our software use it's between the sql database and the website to calculate the statistics and the google maps for us to generate the points where the states are.

## Other Nonfunctional Requirements
### 4.1 Performance Requirements
100MB of hard disk space and 128MB of RAM and a good sql database for data calculations.
### 4.2 Safety Requirements
For possible safety measure we recommend a host with daily backup of the database and the website and a good certification to protect the website from attackers.
### 4.3 Security Requirements
Because this software use a real-time public API we don't have any recomandations than to secure maybe your database from where the datas are collected in case of a attack and to have certificate for more protection on the website.
### 4.4 Software Quality Attributes
For our software quality is represented by flexibility on any device for usage, good looking website, usage of same color palletes on every page for a more attractive view. Every function used on our sql connections are optimised to achieve best results.
