from sklearn.datasets import load_iris;
from sklearn import tree;
import numpy as np;
iris = load_iris();

print iris.feature_names;
print iris.target_names;

print iris.data[0];


for i in range(len(iris.target)) :
    print "Example %d : label %s features %s:" % (i , iris.target[i],iris.data[i]);
    
    
test_ids = [0,50,100];

#training data 
train_target = np.delete(iris.target,test_ids);
train_data = np.delete(iris.data,test_ids,axis=0);

#testing data
test_target = iris.target[test_ids];
test_data = iris.data[test_ids];



classifier = tree.DecisionTreeClassifier();
classifier.fit(train_data,train_target);


print test_target;
print classifier.predict(test_data);


X = iris.data;
Y = iris.target;

from sklearn.cross_validation import train_test_split 
X_train , X_test , Y_train , Y_test  = train_test_split(X,Y,test_size = 0.5);

myclassifier = tree.DecisionTreeClassifier();
myclassifier.fit(X_train, Y_train);

from sklearn.neighbors import KNeighborsClassifier


myclassifier1 = KNeighborsClassifier();
myclassifier1.fit(X_train, Y_train);


predictions = myclassifier.predict(X_test);
predictions1 = myclassifier1.predict(X_test);
from sklearn.metrics import accuracy_score 
print accuracy_score(Y_test,predictions)

print accuracy_score(Y_test,predictions1)



#OWN CLASSIFIER 
import random;

class MYCLASSIFIER ():
    def fit(self,X_train,Y_train):
        self.X_train = X_train;
        self.Y_train = Y_train;
    
    
    def predict(self,X_test):
        predictions = [];
        for row in X_test:
            label = random.choice(self.Y_train);
            predictions.append(label);
        
        return predictions
    







myclassifier2 = MYCLASSIFIER();
myclassifier2.fit(X_train, Y_train);
predictions2 = myclassifier2.predict(X_test);

print accuracy_score(Y_test,predictions2)

