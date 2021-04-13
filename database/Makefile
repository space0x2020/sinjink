#
# html -> svg of moodle
#
PHP=php
V=V1
CPP=$(PHP) ../cmd/cppinclude.php
TOMOODLE=$(PHP) ../cmd/tomoodle.php
HTMLDIR=HTML
MOODLEDIR=MOODLE
STYLEORIGDIR=../styleorig
INCPATH=-I$(HTMLDIR) -I$(STYLEORIGDIR)
STYLESHTML=$(HTMLDIR)/style.css
STYLESMOODLE=$(MOODLEDIR)/style.css
SVGCOMPONENTS=$(STYLEORIGDIR)/svg_components.svg
SCRIPTORIGDIR=../script
SCRIPTS=$(HTMLDIR)/changepage.js
IMAGEDIR=images
ENCODEDDIR=ENCODED
SED=sed -e '/^\#/d' -e '/^$$/d'

TARGETS= \
	$(HTMLDIR) $(MOODLEDIR) \
	$(STYLESHTML) $(STYLESMOODLE) \
	$(MOODLEDIR)/dblogwrite.svg \
	$(HTMLDIR)/dblogwrite.html \
	$(MOODLEDIR)/dblock.svg \
	$(HTMLDIR)/dblock.html \
	$(MOODLEDIR)/dbpractice_1.svg \
	$(HTMLDIR)/dbpractice_1.html \
	$(MOODLEDIR)/dbpractice_2_1.svg \
	$(HTMLDIR)/dbpractice_2_1.html \
	$(MOODLEDIR)/dbpractice_2_2.svg \
	$(HTMLDIR)/dbpractice_2_2.html \
	$(MOODLEDIR)/dbpractice_3.svg \
	$(HTMLDIR)/dbpractice_3.html \
	$(MOODLEDIR)/dbpractice_4.svg \
	$(HTMLDIR)/dbpractice_4.html \
	$(MOODLEDIR)/dbpractice_5.svg \
	$(HTMLDIR)/dbpractice_5.html \
	$(MOODLEDIR)/dbpractice_6.svg \
	$(HTMLDIR)/dbpractice_6.html \
	$(MOODLEDIR)/dbpractice_7.svg \
	$(HTMLDIR)/dbpractice_7.html \
	$(MOODLEDIR)/dbpractice_8.svg \
	$(HTMLDIR)/dbpractice_8.html \
	$(MOODLEDIR)/dbsql_pg.svg \
	$(HTMLDIR)/dbsql_pg.html \
	$(MOODLEDIR)/dbsql_sq3.svg \
	$(HTMLDIR)/dbsql_sq3.html \
	$(MOODLEDIR)/dbinstall_pg.svg \
	$(HTMLDIR)/dbinstall_pg.html \
	$(MOODLEDIR)/dbinstall_sq3.svg \
	$(HTMLDIR)/dbinstall_sq3.html \
	$(MOODLEDIR)/dbhowtouse_pg.svg \
	$(HTMLDIR)/dbhowtouse_pg.html \
	$(MOODLEDIR)/dbhowtouse_sq3.svg \
	$(HTMLDIR)/dbhowtouse_sq3.html \
	$(HTMLDIR)/index.html

all: $(TARGETS)

$(HTMLDIR): .
	if [ ! -d $(HTMLDIR) ]; then mkdir $(HTMLDIR) ; fi

$(MOODLEDIR): .
	if [ ! -d $(MOODLEDIR) ]; then mkdir $(MOODLEDIR) ; fi

$(MOODLEDIR)/dblogwrite.svg: dblogwrite.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dblogwrite.html: dblogwrite.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dblock.svg: dblock.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dblock.html: dblock.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_1.svg: dbpractice_1.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_1.html: dbpractice_1.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_2_1.svg: dbpractice_2_1.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_2_1.html: dbpractice_2_1.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_2_2.svg: dbpractice_2_2.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_2_2.html: dbpractice_2_2.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_3.svg: dbpractice_3.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_3.html: dbpractice_3.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_4.svg: dbpractice_4.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_4.html: dbpractice_4.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_5.svg: dbpractice_5.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_5.html: dbpractice_5.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_6.svg: dbpractice_6.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_6.html: dbpractice_6.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_7.svg: dbpractice_7.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_7.html: dbpractice_7.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbpractice_8.svg: dbpractice_8.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_8.html: dbpractice_8.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbsql_pg.svg: dbsql_pg.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbsql_pg.html: dbsql_pg.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbsql_sq3.svg: dbsql_sq3.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbsql_sq3.html: dbsql_sq3.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbinstall_pg.svg: dbinstall_pg.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbinstall_pg.html: dbinstall_pg.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbinstall_sq3.svg: dbinstall_sq3.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbinstall_sq3.html: dbinstall_sq3.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbhowtouse_pg.svg: dbhowtouse_pg.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbhowtouse_pg.html: dbhowtouse_pg.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/dbhowtouse_sq3.svg: dbhowtouse_sq3.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbhowtouse_sq3.html: dbhowtouse_sq3.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(HTMLDIR)/index.html: index.html
	sed 's/HTML\///' $< > $@

#
# style
#
$(STYLESHTML): $(STYLEORIGDIR)/style_orig.css
	$(CPP) -D$(V) $< > $@

$(STYLESMOODLE): $(STYLEORIGDIR)/style_orig.css
	$(CPP) -D$(V) $< > $@

#
# Javascript
#
$(SCRIPTS): $(SCRIPTORIGDIR)/changepage.js
	cp -a $< $@

clean:
	rm -fr $(HTMLDIR)/* $(MOODLEDIR)/* $(ENCODEDDIR)/*.b64
