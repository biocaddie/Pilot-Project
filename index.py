#indexv2.py

import requests
res = requests.get('http://localhost:9200')
print(res.content)

from elasticsearch import Elasticsearch
es = Elasticsearch([{'host': 'localhost', 'port': 9200}])
print es

dirpath = '/Users/xdong2/Desktop/preprocessed_brat/'
import os
#files = os.listdir(dirpath)
##i=1
#for filename in files[:6000]:
#    
#    if not filename.endswith ('.txt'):
#        continue
#    print filename
#    i=filename.replace('.txt','')
#    f=file(dirpath+filename,'r')
#    text=f.read()
#    text= text.split('\n')
#    text=[line for line in text if line]
#    f.close()
#    pairs = dict()
#    for line in text:
#        x=line.split('  - ')
#        #print x
#        
#        key=x[0]
#        value=x[1]
#        pairs[str(key)]=str(value)
#
#    annfile=filename.replace('.txt','.ann')
#    g=file(dirpath+annfile,'r')
#    text2=g.read()
#    text2=text2.split('\n')
#    text2=[line2 for line2 in text2 if line2]
#    g.close()
#    for line2 in text2:
#        s=line2.split('\t')
#        t=s[1].split(' ')
#        o=t[0]
#        print s
#        print t
#        key2=t[0]
#	value2=s[2]
#	import re
#	if re.search('size',key2):
#            print key2
#	    a=s[2].replace(",","")
#	    print value2
#	    a=a.replace(" ","")
#            a=a.replace(">","")
#	    if not a.isdigit():
#	    	continue
#	    value2=int(a)
#        if key2 in pairs:
#            pairs[key2].append(value2)
#        else:
#            pairs[key2]=[value2]
#
#    es.index(index='gwas2',doc_type='test2',id=i,body=pairs)
#i=i+1

#print es.search(index="gwas2", body={"query":{"range":{"case_size":{"gte":50}}}})

print es.search(index="gwas2", body={"query": {"bool":{'should':{"match": {'trait':'Alzheimer\'s'}}}}})
#
#print '------------'
#res = es.search(index="2008", body={"query": {"match_all": {}}})
#print("Got %d Hits:" % res['hits']['total'])

