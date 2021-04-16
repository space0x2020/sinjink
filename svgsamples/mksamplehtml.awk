BEGIN {
    w = 800;
    h = 3500;
    printf("<html>\n");
    printf("<head>\n");
    printf("<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
    printf("<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">\n");
    printf("<title>SVG Compoments samples</title>\n");
    printf("</head>\n");
    printf("<body>\n");
    printf("\n");
    printf("#include \"style_svg.css\"\n");
    printf("<div id=\"svgdefs\" style=\"display:none;\">\n");
    printf("  <svg>\n");
    printf("#include \"svg_components.svg\"\n");
    printf("  </svg>\n");
    printf("</div>\n");

    printf("<div id=\"campus\" class=\"basepane\" style=\"height:%d;\">\n", h);

    printf("<div id=\"cpbase11_01\" class=\"page\" style=\"display:block;\">\n");
    printf("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"%d\" height=\"%d\" viewBox=\"0 0 %d %d\">\n", w, h, w, h);
    x = 0;
    y = 0;
    xa = 300;
    ya = 30;
}
{
    printf("<line class=\"ff\" x1=\"%d\", y1=\"%d\" x2=\"%d\" y2=\"%d\" />\n", xa, 0, xa, h);
    if ($0 ~ /g id=/) {
        #printf("%s\n", $0);
        if (match($0, /".*"/)) {
            s = substr($0, RSTART+1, RLENGTH - 2);
            printf("  <text class=\"ff\" x=\"%d\" y=\"%d\">%s</text>\n", x, y+5, s);
            printf("  <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#%s\" transform=\"translate(%d, %d)\"></use>\n", s, x + xa, y);
            y += ya;
#printf("<line class=\"ff\" x1=\"10\" y1=\"10\" x2=\"500\" y2=\"%d\" />\n", y);
        }
    }
}

END {
    printf("</svg>\n");
    printf("</div><!-- page -->\n");
    printf("</div><!-- campus -->\n");
    printf("#ifdef MOODLE\n");
    printf("<script text/script=\"javascript\">\n");
    printf("#include \"changepage.js\"\n");
    printf("</script>\n");
    printf("#else\n");
    printf("<script src=\"changepage.js\"></script>\n");
    printf("#endif\n");
    printf("<script text/script=\"javascript\">\n");
    printf("   setpagename(\"cpbase\", \"cpbasesub\");\n");
    printf("</script>\n");
    printf("</body>\n");
    printf("</html>\n");
}


