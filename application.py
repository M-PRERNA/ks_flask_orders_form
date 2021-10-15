from flask import Flask, render_template
from flask.globals import request
from flask_sqlalchemy import SQLAlchemy
import json
from datetime import datetime
# from flaskmobility import Mobility

# adding a comment
local_server = True

with open('config.json','r') as c:
    params = json.load(c)["params"]


application = Flask(__name__)
db = SQLAlchemy(application)


# for table contacts in the db
class Orders(db.Model):
    '''
    customer_id	name	ordered_on	deliver_by	order_status	frag_type	cont_type	qty	
    '''
    customer_id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(80),  nullable=False)
    ordered_on = db.Column(db.String(120),  nullable=False)
    deliver_by = db.Column(db.String(12), nullable=False)
    order_status = db.Column(db.String(120),  nullable=True)
    frag_type = db.Column(db.String(12), nullable=True)
    cont_type = db.Column(db.String(12), nullable=True)
    qty = db.Column(db.Integer, nullable=True)



if (local_server):
    application.config['SQLALCHEMY_DATABASE_URI'] = params['local_uri']
else:
    application.config['SQLALCHEMY_DATABASE_URI'] = params['prod_uri']



@application.route('/', methods = ['GET','POST'])
def order():
    if (request.method == 'POST'):
        # add entry to the database
        name = request.form.get('customer-name')
        ord_on = request.form.get('order-date')
        del_by = request.form.get('delivery-date')
        ord_status  = request.form.get('status')
        frg_type = request.form.get('fragrance-type')
        cnt_type = request.form.get('container-type')
        Qty = request.form.get('quantity')
        

        entry = Orders(name=name, 
                       ordered_on = ord_on, 
                       deliver_by = del_by, 
                       order_status = ord_status, 
                       frag_type = frg_type,
                       cont_type = cnt_type,
                       qty = Qty )
        
        db.session.add(entry)
        db.session.commit()
     

    return render_template('index.php', params = params)

if __name__ == "__main__":
    application.run(debug = True)