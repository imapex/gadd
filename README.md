# gadd
###**Gomorrah Automated Distributed Defense**

# boilerplate Template

Any applicable badges (build/documentation/collaboration/licenses should go here

# Description - Phase 1

The demo will highlight Spark and NFVIS along with ACI and NGIPS*. The idea of the demo is:  based on an event/alert in the datacenter, dynamically deploy a FW at offending remote branch and post notifications in a Spark room. The branch site has a NFVis device and only has a virtual router deployed/functioning as a starting point.

For phase 1, we don't actually have an IPS at the DC, so we'll simulate the attack event. However, we do have ACI: we will gather health statistics of a server along with ingress/egress stats and send the information to our Spark room. In Phase 2 we'll have an actual IPS to provide 'real' data.



# Installation

## Environment

Prerequisites

* Python 2.7+
* [setuptools package](https://pypi.python.org/pypi/setuptools)
* Docker

We'll be leveraging the local/internal labs for ACI and a NFVIS. Our goal is to install/run in DevNet at a future date. 

## Downloading

There are several ways to download this demo.

Option A: Git

If you have git installed, clone the repository

    git clone https://github.com/imapex/gadd

Option B:

If you don't have git, download a zip copy of the repository
and extract.

Option C:

The latest build of this project is also available as a Docker image from Docker Hub

    docker pull imapex/gadd:tag

## Installing

We'll cover two ways to install and run this demo. You have a choice of using either:  
- Docker container   
- Running the python app native on our laptop.

##(I) Running the Docker container
 
###Setup 
* execute setup script:``source gadd_setup.sh``
* execute run script:``source gadd_run.sh``
* open Spark
* do this and do that...
* etc...

###Usage  
* open browser
* do this and do that...

##(II) Running python apps on your laptop  

###Setup  
###Usage



# Development

Provide any notes for other contributors.  This includes how to run tests / etc


## Linting

We use flake 8 to lint our code. Please keep the repository clean by running:

    flake8

## Testing

The IMAPEX team should attempt to have unittests with  100% code coverage. An example test suite is contained
within the tests.py file for the boilerplate application

The tests are can be run in the following ways::

    python tests.py


When adding additional code or making changes to the project, please ensure that unit tests are added to cover the
new functionality and that the entire test suite is run against the project before submitting the code.
Minimal code coverage can be verified using tools such as coverage.py.

For instance, after installing coverage.py, the toolkit can be run with the command::

    coverage run tests.py

and an HTML report of the code coverage can be generated with the command::

    coverage html


# License

Include any applicable licenses here as well as LICENSE.TXT in the root of the repository

