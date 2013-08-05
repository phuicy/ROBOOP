# makefile for documentation of ROBOOP

.PHONY : all

all : robot.pdf htmldoc/robot.html robdocs.zip

robot.pdf : robot.tex gnulgpl.tex copyrigh.tex version.tex
	pdflatex $<
	bibtex $(<:.tex=.aux)
	pdflatex $<
	pdflatex $<

htmldoc/robot.html : robot.tex
	if [ ! -e htmldoc ]; then mkdir htmldoc; fi
	htlatex robot "html,3" "" -dhtmldoc/
	cp htmldoc/robot.html htmldoc/index.html

robdocs.zip : htmldoc/robot.html
	zip -j robdocs htmldoc/*.html htmldoc/*.css htmldoc/*.png

version.tex : ../readme.txt
	grep This.is.ver $< |cut -d ' ' -f 4 > $@
