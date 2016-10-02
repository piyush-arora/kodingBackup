# for reshaping
import numpy as np

# for ML
import sklearn 



# Describe features as arrays as training sets
features = [
                    [140 , 1] ,   # 140g smooth
                    [130 , 1] ,   # 130d smooth
                    [150 , 0] ,   # 150g bumpy
                    [170 , 0] ,   # 170g bumpy
            ];
            
            
# Decribe labels as arrays as right labels for corresponding each set
labels = [  0,   # apple
            0,   # apple
            1,   # orange
            1    # orange
        ];

# Create an empty classifier called tree
classifier = tree.DecisionTreeClassifier();


# train the classifier with the training data
classifier.fit(features,labels);

# new data to test out algo
data = [150,0];

# reshape inorder to make it work
np.reshape(data, (-1, 1))

# predict the label
print classifier.predict(np.reshape(data, (1, -1)));
