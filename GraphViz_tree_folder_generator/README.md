## To generate tree folder graph :
1. install graphviz: `sudo apt-get install graphviz`
2. run the scrpit to generate youTree.dot file: `php GenerateTreeGraph.php 'myPath' > youTree.dot'`
3. Generate the graph (jpg in the exemple) : `dot -Tjpg -oyouTree.jpg youTree.dot`