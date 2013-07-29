.PHONY: all

all: version.txt
	doxygen roboop_doxygen
	make -C latex

version.txt : ../readme.txt
	echo -n 'PROJECT_NUMBER         = ' > $@
	grep This.is.ver $< |cut -d ' ' -f 4 >> $@
