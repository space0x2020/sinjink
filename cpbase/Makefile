#
# html -> svg of moodle
#
PHP=php
V=V1
CPP=$(PHP) ../cmd/cppinclude.php
TOMOODLE=$(PHP) ../cmd/tomoodle.php
TOBASE64=../cmd/tobase64.sh
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

IMGFILES= \
	$(HTMLDIR)/1401-2-A.jpg \
	$(ENCODEDDIR)/1401-2-A.b64 \
	$(HTMLDIR)/1502-A.jpg \
	$(ENCODEDDIR)/1502-A.b64 \
	$(HTMLDIR)/1503-A.jpg \
	$(ENCODEDDIR)/1503-A.b64 \
	$(HTMLDIR)/1-2-9.png \
	$(ENCODEDDIR)/1-2-9.b64 \
	$(HTMLDIR)/sd-formula175.png \
	$(ENCODEDDIR)/sd-formula175.b64 \
	$(HTMLDIR)/formula_sd.png \
	$(ENCODEDDIR)/formula_sd.b64 \
	$(HTMLDIR)/arraybox.png \
	$(ENCODEDDIR)/arraybox.b64 \
	$(HTMLDIR)/varboxt.png \
	$(ENCODEDDIR)/varboxt.b64 \
	$(HTMLDIR)/rei-ittei.gif \
	$(ENCODEDDIR)/rei-ittei.b64 \
	$(HTMLDIR)/rei-random.gif \
	$(ENCODEDDIR)/rei-random.b64

TARGETS= \
	$(STYLES) \
	$(SCRIPTS) \
	$(IMGFILES) \
	$(MOODLEDIR)/addressing.svg \
	$(HTMLDIR)/addressing.html \
	$(MOODLEDIR)/binarynum.svg \
	$(HTMLDIR)/binarynum.html \
	$(MOODLEDIR)/bnf.svg \
	$(HTMLDIR)/bnf.html \
	$(MOODLEDIR)/clock.svg \
	$(HTMLDIR)/clock.html \
	$(MOODLEDIR)/complement.svg \
	$(HTMLDIR)/complement.html \
	$(MOODLEDIR)/cpucycle.svg \
	$(HTMLDIR)/cpucycle.html \
	$(MOODLEDIR)/encrypt.svg \
	$(HTMLDIR)/encrypt.html \
	$(MOODLEDIR)/flipflopcircuit.svg \
	$(HTMLDIR)/flipflopcircuit.html \
	$(MOODLEDIR)/floatingpoint.svg \
	$(HTMLDIR)/floatingpoint.html \
	$(MOODLEDIR)/fploss.svg \
	$(HTMLDIR)/fploss.html \
	$(MOODLEDIR)/harddisk.svg \
	$(HTMLDIR)/harddisk.html \
	$(MOODLEDIR)/interrupt.svg \
	$(HTMLDIR)/interrupt.html \
	$(MOODLEDIR)/javavm.svg \
	$(HTMLDIR)/javavm.html \
	$(MOODLEDIR)/maskopration.svg \
	$(HTMLDIR)/maskopration.html \
	$(MOODLEDIR)/mathematics.svg \
	$(HTMLDIR)/mathematics.html \
	$(MOODLEDIR)/polishnotation.svg \
	$(HTMLDIR)/polishnotation.html \
	$(MOODLEDIR)/reliability.svg \
	$(HTMLDIR)/reliability.html \
	$(MOODLEDIR)/shiftoperation.svg \
	$(HTMLDIR)/shiftoperation.html \
	$(MOODLEDIR)/software.svg \
	$(HTMLDIR)/software.html \
	$(MOODLEDIR)/sramdramcache.svg \
	$(HTMLDIR)/sramdramcache.html \
	$(MOODLEDIR)/taskquiz.svg \
	$(HTMLDIR)/taskquiz.html \
	$(MOODLEDIR)/virtualaddress.svg \
	$(HTMLDIR)/virtualaddress.html \
	$(HTMLDIR)/index.html

all: $(TARGETS)

$(MOODLEDIR)/addressing.svg: $(HTMLDIR)/addressing.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/addressing.html: addressing.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/binarynum.svg: $(HTMLDIR)/binarynum.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/binarynum.html: binarynum.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/bnf.svg: $(HTMLDIR)/bnf.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/bnf.html: bnf.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/clock.svg: $(HTMLDIR)/clock.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/clock.html: clock.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/dbpractice_2_2.svg: $(HTMLDIR)/dbpractice_2_2.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/dbpractice_2_2.html: dbpractice_2_2.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/complement.svg: $(HTMLDIR)/complement.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/complement.html: complement.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/cpucycle.svg: $(HTMLDIR)/cpucycle.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/cpucycle.html: cpucycle.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/encrypt.svg: $(HTMLDIR)/encrypt.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/encrypt.html: encrypt.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/flipflopcircuit.svg: $(HTMLDIR)/flipflopcircuit.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/flipflopcircuit.html: flipflopcircuit.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/floatingpoint.svg: $(HTMLDIR)/floatingpoint.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/floatingpoint.html: floatingpoint.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/fploss.svg: $(HTMLDIR)/fploss.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/fploss.html: fploss.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/harddisk.svg: $(HTMLDIR)/harddisk.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/harddisk.html: harddisk.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/interrupt.svg: $(HTMLDIR)/interrupt.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/interrupt.html: interrupt.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/javavm.svg: $(HTMLDIR)/javavm.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/javavm.html: javavm.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/maskopration.svg: $(HTMLDIR)/maskopration.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/maskopration.html: maskopration.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/mathematics.svg: $(HTMLDIR)/mathematics.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/mathematics.html: mathematics.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/polishnotation.svg: $(HTMLDIR)/polishnotation.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/polishnotation.html: polishnotation.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/reliability.svg: $(HTMLDIR)/reliability.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/reliability.html: reliability.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/shiftoperation.svg: $(HTMLDIR)/shiftoperation.html $(ENCODEDDIR)/1-2-9.b64
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/shiftoperation.html: shiftoperation.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/software.svg: $(HTMLDIR)/software.html $(ENCODEDDIR)/varboxt.b64 $(ENCODEDDIR)/arraybox.b64
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/software.html: software.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/sramdramcache.svg: $(HTMLDIR)/sramdramcache.html $(ENCODEDDIR)/1401-2-A.b64
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/sramdramcache.html: sramdramcache.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/taskquiz.svg: $(HTMLDIR)/taskquiz.html $(ENCODEDDIR)/1502-A.b64 $(ENCODEDDIR)/1503-A.b64
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/taskquiz.html: taskquiz.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(MOODLEDIR)/virtualaddress.svg: $(HTMLDIR)/virtualaddress.html
	$(TOMOODLE) -I$(HTMLDIR):$(ENCODEDDIR) -$V -f $< > $@

$(HTMLDIR)/virtualaddress.html: virtualaddress.html $(STYLES) $(SVGCOMPONENTS)
	$(CPP) -C -D$(V) -I$(INCPATH) $< > $@

$(HTMLDIR)/index.html: index.html
	sed 's/HTML\///' $< > $@

#
# Images
#
$(HTMLDIR)/1401-2-A.jpg: $(IMAGEDIR)/1401-2-A.jpg
	cp -a $< $@

$(ENCODEDDIR)/1401-2-A.b64: $(IMAGEDIR)/1401-2-A.jpg
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/1502-A.jpg: $(IMAGEDIR)/1502-A.jpg
	cp -a $< $@

$(ENCODEDDIR)/1502-A.b64: $(IMAGEDIR)/1502-A.jpg
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/1503-A.jpg: $(IMAGEDIR)/1503-A.jpg
	cp -a $< $@

$(ENCODEDDIR)/1503-A.b64: $(IMAGEDIR)/1503-A.jpg
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/1-2-9.png: $(IMAGEDIR)/1-2-9.png
	cp -a $< $@

$(ENCODEDDIR)/1-2-9.b64: $(IMAGEDIR)/1-2-9.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/sd-formula175.png: $(IMAGEDIR)/sd-formula175.png
	cp -a $< $@

$(ENCODEDDIR)/sd-formula175.b64: $(IMAGEDIR)/sd-formula175.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/formula_sd.png: $(IMAGEDIR)/formula_sd.png
	cp -a $< $@

$(ENCODEDDIR)/formula_sd.b64: $(IMAGEDIR)/formula_sd.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/arraybox.png: $(IMAGEDIR)/arraybox.png
	cp -a $< $@

$(ENCODEDDIR)/arraybox.b64: $(IMAGEDIR)/arraybox.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/varboxt.png: $(IMAGEDIR)/varboxt.png
	cp -a $< $@

$(ENCODEDDIR)/varboxt.b64: $(IMAGEDIR)/varboxt.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/rei-ittei.gif: $(IMAGEDIR)/rei-ittei.gif
	cp -a $< $@

$(ENCODEDDIR)/rei-ittei.b64: $(IMAGEDIR)/rei-ittei.gif
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/rei-random.gif: $(IMAGEDIR)/rei-random.gif
	cp -a $< $@

$(ENCODEDDIR)/rei-random.b64: $(IMAGEDIR)/rei-random.gif
	sh $(TOBASE64)  $< > $@

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
