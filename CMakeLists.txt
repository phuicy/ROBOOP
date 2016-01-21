# CMake configuration file roboop root dir
#

cmake_minimum_required(VERSION 2.6)

project(roboop)
if(UNIX)
  find_package(Boost)
  include_directories(${Boost_INCLUDE_DIRS})
endif(UNIX)
if(WIN32)
  if(NOT UNIX)
    if(NOT MINGW)
      add_definitions(-D_STANDARD_)
    endif(NOT MINGW)
  endif(NOT UNIX)
endif(WIN32)
subdirs(source newmat)
include_directories(source newmat)
set(EXECUTABLE_OUTPUT_PATH ${PROJECT_BINARY_DIR})
set(LIBRARY_OUTPUT_PATH ${PROJECT_BINARY_DIR})
