# makefile for documentation of ROBOOP

.PHONY : all

all : robot.ps robot.pdf robot/robot.html robdocs.zip

robot.ps : robot.dvi
	dvips -Ppdf -tletter $<

robot.dvi : robot.tex gnulgpl.tex copyrigh.tex version.tex
	latex $*
	bibtex $*
	latex $*
	latex $*

robot.pdf : robot.ps
	ps2pdf $<

robot/robot.html : robot.tex
	latex2html -split 5 $<

robdocs.zip : robot/robot.html
	zip -j robdocs robot/*.html robot/*.gif robot/*.css robot/*.png

version.tex : ../readme.txt
	grep This.is.ver $< |cut -d ' ' -f 4 > $@
