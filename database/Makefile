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
INCPATH=$(HTMLDIR):$(STYLEORIGDIR)
STYLES=$(HTMLDIR)/style.css
SVGCOMPONENTS=$(STYLEORIGDIR)/svg_components.svg
SCRIPTORIGDIR=../script
SCRIPTS=$(HTMLDIR)/changepage.js
IMAGEDIR=images
ENCODEDDIR=ENCODED

TARGETS= \
	$(STYLES) \
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

$(MOODLEDIR)/dblogwrite.svg: $(HTMLDIR)/dblogwrite.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dblogwrite.html: dblogwrite.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dblock.svg: $(HTMLDIR)/dblock.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dblock.html: dblock.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_1.svg: $(HTMLDIR)/dbpractice_1.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_1.html: dbpractice_1.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_2_1.svg: $(HTMLDIR)/dbpractice_2_1.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_2_1.html: dbpractice_2_1.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_2_2.svg: $(HTMLDIR)/dbpractice_2_2.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_2_2.html: dbpractice_2_2.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_3.svg: $(HTMLDIR)/dbpractice_3.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_3.html: dbpractice_3.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_4.svg: $(HTMLDIR)/dbpractice_4.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_4.html: dbpractice_4.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_5.svg: $(HTMLDIR)/dbpractice_5.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_5.html: dbpractice_5.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_6.svg: $(HTMLDIR)/dbpractice_6.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_6.html: dbpractice_6.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_7.svg: $(HTMLDIR)/dbpractice_7.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_7.html: dbpractice_7.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_8.svg: $(HTMLDIR)/dbpractice_8.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_8.html: dbpractice_8.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbsql_pg.svg: $(HTMLDIR)/dbsql_pg.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbsql_pg.html: dbsql_pg.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbsql_sq3.svg: $(HTMLDIR)/dbsql_sq3.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbsql_sq3.html: dbsql_sq3.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbinstall_pg.svg: $(HTMLDIR)/dbinstall_pg.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbinstall_pg.html: dbinstall_pg.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbinstall_sq3.svg: $(HTMLDIR)/dbinstall_sq3.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbinstall_sq3.html: dbinstall_sq3.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbhowtouse_pg.svg: $(HTMLDIR)/dbhowtouse_pg.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbhowtouse_pg.html: dbhowtouse_pg.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbhowtouse_sq3.svg: $(HTMLDIR)/dbhowtouse_sq3.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbhowtouse_sq3.html: dbhowtouse_sq3.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(HTMLDIR)/index.html: index.html
	sed 's/HTML\///' $< > $@

#
# style
#
$(STYLES): $(STYLEORIGDIR)/style_orig.css
	$(CPP) -C -D$(V) $< > $@

#
# Javascript
#
$(SCRIPTS): $(SCRIPTORIGDIR)/changepage.js
	cp -a $< $@

clean:
	rm -fr $(HTMLDIR)/* $(MOODLEDIR)/* $(ENCODEDDIR)/*.b64
