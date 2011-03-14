ndbks repro for indiebikes.com

this is not important for you, it is just my connanogical repro for this project. visit indiebikes.com for more.

on upgrade & migrate
+ backup complete server db
+ backup complete files from ftp

+ download current version from github
+ remove .htaccess (it referrs to passwords)

+ upload new content (think about deleted / moved files)
+ insert changed tables (use droptable, see below)


info:
PRESERVE FOLLOWING MYSQL TABLES ON THE SERVER

l10n_articles
l10n_txp_de_de
l10n_txp_en_gb

textpattern
txp_lang
txp_image

yourls_log
yourls_options
yourls_url


MOST LIKELY, THESE TABLES WILL CONTAIN UPDATED DATA (pages, forms from textpattern)
txp_category
txp_form
txp_page
txp_plugin
txp_section
