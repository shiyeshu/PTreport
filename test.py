# -*- coding: UTF-8 -*-
from __future__ import print_function
from docx import document
from datetime import date
from mailmerge import MailMerge

template = "1.docx"
document = MailMerge(template)

# a={'name':'aaa','shouji':'111'}
# print("Fields included in {}: {}".format(template,
#                                          document.get_merge_fields()))
document.get_merge_fields()


def outdocx(name, shouji, system):
    document.merge(
        system=system,
        name=name,
        shouji=shouji,
        time='{:%Y-%m-%d}'.format(date.today())
    )
    document.write('渗透报告.docx')

    pass
