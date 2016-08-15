# gadd

# boilerplate Template

Any applicable badges (build/documentation/collaboration/licenses should go here

# Description - Phase 1

Branch to DC automated FW deployment based on threat. 
 
The branch site has a NFVis device and only has a virutual router deployed/functioning (as a starting point). The ACI data center has an IPS monitoring traffic.

Scenario: A user at a branch is comprising a server in the data center; the IPS sees this threat. Based on this threat 'event', we'll automatically deploy a virtual FW at the branch site and post notifications to a Spark room.

For phase 1, we don't actually have an IPS at the DC, so we'll be simulating the attack event. However, we do have ACI: we will be gathering health statistics of the server and sending the information to our Spark room. In Phase 2 we'll have an actual IPS to provide 'real' data.

The app will be running on docker containers. We have a dashboard to interface with the application.


# Installation

## Environment

Prerequisites

* Python 2.7+
* [setuptools package](https://pypi.python.org/pypi/setuptools)

## Downloading

Provide instructions for how to obtain the software from this repository, if there are multiple options - please include
as many as possible

Option A:

If you have git installed, clone the repository

    git clone https://github.com/imapex/boilerplate

Option B:

If you don't have git, [download a zip copy of the repository](https://github.com/imapex/boilerplate/archive/master.zip)
and extract.

Option C:

The latest build of this project is also available as a Docker image from Docker Hub

    docker pull username/image:tag

## Installing

Provide instructions on how to install / use the application

# Usage

Provide any relevant code samples / CLI's to leverage the code

    python app.py


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

