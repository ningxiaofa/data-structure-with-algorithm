//实现链表类
function linkList(){
	//是属于闭包吗?  函数里面定义变量 是属于局部变量 只不过这个变量有些特殊,是一个函数 实例化就是一个对象  JavaScript中一切皆是对象 就如react中一切皆是组件 Linux中一切皆是文件
	var Node = function(data){
		this.data = data;
		this.next = null;
	}
	var length = 0; //长度
	var head = null; //头节点
	var tail = null; //尾节点

	this.append = function(data){
		var new_node = new Node(data);
		// console.log(new_node);//打印出来是对象
		if(head == null){
			head = new_node;
			tail = new_node;
		}else{
			tail.next = new_node;
			tail = new_node; //尾节点永远指向最后一个节点
		}
		length +=1;
		return true;
	}

	this.print = function(){//打印,必然想到用遍历
		var current_node = head;
		while(current_node){
			console.log(current_node.data);
			current_node = current_node.next;
		}
	}

	//插入
	this.insert = function(index,data){
		//index非法
		if(index < 0 || index > length){
			return false;
		}else if(index == length){//最后一个节点
			return this.append(data);
		}else{
			var new_node = new Node(data);
			if(index == 0){
				new_node.next = head;
				head = new_node;
			}else{
				var insert_index = 1;
				var curr_node =  head;
				//就是为了找到要插入节点的上一个节点 不停地滑动
				while(insert_index < index){
					insert_index +=1;
					curr_node = curr_node.next;
				}

				//把三者首位相连接起来
				var next_node = curr_node.next;
				curr_node.next = new_node;
				new_node.next = next_node;
			}
			length +=1;
			return true;
		}

	}

	//移除
	this.remove = function(index){
		if(index < 0 || index >= length){
			return null;
		}else{
			var del_node = null;
			if(index == 0){			
				del_node = head;
				head = head.next;
			}else{
				var del_index = 0;
			    var pre_node = null;
			    var curr_node = head;
				while(del_index < index){
					del_index +=1;
					pre_node = curr_node;
					curr_node = curr_node.next;
				}
				del_node = curr_node;
				pre_node.next = curr_node.next;
				//如果删除的节点是尾节点,则其前一个节点就是尾结点
				if(curr_node.next = null){
				   tail = pre_node;
				}
		    }
		    length -=1;
		    del_node.next = null;
		    return del_node.data;
		}
	}
}



var link = new linkList();
link.append(2);
link.append(4);
link.append(8);
link.print();
console.log(link.remove(1));
link.print();