# -*- coding: UTF-8 -*-
from __future__ import print_function
from flask import request
from datetime import date
from docxtpl import DocxTemplate




def outdocx(name,shouji,system):
    name = request.form['name']
    shouji = request.form['shouji']
    system = request.form['system']
    doc = DocxTemplate("11.docx")
    TEXT = {
        'flags': {'1',
                  '2',
                  '3',
                  '4'},
        'name': name,
        'shouji':shouji,
        'system':system
    }

    doc.render(TEXT)
    doc.save("generated_doc.docx")
    pass
