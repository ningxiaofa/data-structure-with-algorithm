function linkList(){
	var Node = function(data){
		this.data = data;//数据域
		this.next = null;//指针域
	}

	var length = 0;//长度
	var head = null;//头节点
	var tail = null;//尾节点

	//追加节点
	this.append = function(data){
		var new_node = new Node(data);
		if(head == null){
			head = new_node;
			tail = new_node;
		}else{
			tail.next = new_node;
			tail = new_node;
		}
		length +=1;
		return true;
	}

	//打印节点
	this.print = function(){
		var current_node = head;
		while(current_node){
			console.log(current_node.data);
			current_node = current_node.next;
		}
	}
}

var node = new linkList();
node.append(2);
node.append(4);
node.append(8);
node.print();