<?php
/**
 *  @file   Modulary php
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   09 / 11 / 2014
 */

$this->css("navbar");
$this->css("doc");
$this->javascript("jquery/jquery-scrollto");
$this->render("header");
$this->render("navbar");
?>
<div class="container-fluid">
	<h1>Modulary</h1>
	<div id="doc" class="row">
		<!--
			*  Menu
			-->
		<div id="index" class="col-md-3">
			<ul>
				<li>
					<div target="configuration">Configuration</div>
					<ul>
						<li target="include">Include</li>
						<li target="compilation">Compilation</li>
					</ul>
				</li>
				<li target="overview">Overview</li>
				<li>
					<div target="builtIn">Built in</div>
					<ul>
						<li target="get">Get</li>
						<li target="isType">Istype</li>
						<li target="iter">Iter</li>
						<li target="len">Len</li>
						<li target="next">Next</li>
						<li target="push">Push</li>
						<li target="str">Str</li>
						<li target="sum">Sum</li>
						<li target="type">Type</li>
					</ul>
				</li>
				<li>
					<div target="features">Features</div>
					<ul>
						<li target="string">String</li>
						<li target="array">Array</li>
						<li target="liste">Liste</li>
						<li target="myFunctions">My functions</li>
					</ul>
				</li>
				<li>
					<div target="parsing">The parsing system</div>
					<ul>
						<li target="stream">Stream</li>
						<li target="parser">PEG Parser</li>
						<li target="json">Json</li>
					</ul>
				</li>
				<li target="making">Make his own class</li>
				<li target="hineritance">The hineritance</li>
				<li target="singleton">The singleton</li>
			</ul>
		</div>
		<!--
			*  Core
			-->
		<div id="content" class="col-md-9">
			<div id="configuration">
				<h2>Configuration</h2>
				<h3 id="include">Include</h3>
				<div class="code">
					<h2>*.c</h2>
					<div>
						<span class="preprocessor">#include</span>
						<span class="string">"libmod.h"</span>
						<br>...
					</div>
				</div>
				<h3 id="compilation">Compilation</h3>
				<div class="code">
					<div>
						gcc *.c -L/path/to/libmod -lmod
					</div>
				</div>
			</div>
			<hr>
			<div id="overview">
				<h2>Overview</h2>
				Modulary is a library that help you to make object when coding on C.
				<div class="code">
					<h2>hello_world.c</h2>
					<div>
						<span class="preprocessor">#include</span> <span class="string">&lt;unistd.h></span>
						<br>
						<span class="preprocessor">#include</span> <span class="string">"modulary.h"</span>
						<br><br>
						<span class="type">int</span> <span class="function-name">main</span>() {
						<br>
						&emsp;<span class="type">Stream</span> <span class="variable-name">st</span> = <span class="keyword">new</span>(__Stream, STDOUT_FILENO);
						<br><br>
						&emsp;st->write(st, <span class="string">"Hello world!"</span>);
						<br>
						&emsp;<span class="keyword">return</span> (EXIT_SUCCESS);</span>
						<br>
						}
					</div>
				</div>
			</div>
			<hr>
			<div id="builtIn">
				<h2>Built in</h2>
				<h5 id="get">Get</h5>
				<h4>get : Objet target, unsigned int index</h4>
				Retrieve the element store into target at the index position.
				<h5 id="isType">Istype</h5>
				<h4>istype : Object target, char *potential_name</h4>
				Return true if the name of the target is the potential_name else return false.
				<h5 id="iter">Iter</h5>
				<h4>iter : Objet target</h4>
				Return an iterable object. Usefull with list or array.
				<h5 id="len">Len</h5>
				<h4>len : Objet target</h4>
				Return the length of the target.
				<h5 id="next">Next</h5>
				<h4>next : Iter it</h4>
				Return the next element on the iterable object.
				<h5 id="push">Push</h5>
				<h4>push : Objet target, Objet element</h4>
				Append the element into the target.
				<h5 id="str">Str</h5>
				<h4>str : Objet target</h4>
				Transform target into string. Usefull to display the target.
				<h5 id="sum">Sum</h5>
				<h4>sum : Objet target, Objet target2</h4>
				Add the target2 to the target and return a new object.
				<h5 id="type">Type</h5>
				<h4>type : Object target</h4>
				Return the name of the target.
			</div>
			<hr>
			<div id="features">
				<h2>Features</h2>
				<h3 id="string">String</h3>
				<h5>Ctor</h5>
				<h4>_ctor: char *string</h4>
				Copy the string.
				<h5>Dtor</h5>
				<h4>_dtor</h4>
				Free the string.
				<h5>Epur</h5>
				<h4>epur : char *to_epur, int hinib[][3]</h4>
				Epur the string by deleting all characters in the array to_epur.
				If hinib is not null, all characters between hinibitors are saved.
				<h5>Set</h5>
				<h4>set : unsigned int index, char c</h4>
				Replace the character on the index by the character c.
				<h5>Split</h5>
				<h4>split : char *separators, int hinib[][3]</h4>
				Split the string into a new array. Separators are used to cut the string.
				<h5>Len</h5>
				<h4>len</h4>
				Return the length of the string.
				<h5>Sum</h5>
				<h4>sum : String str1, String str2</h4>
				Concat the bith string
				<h5>Str</h5>
				<h4>str</h4>
				Return the content of the string.
				<h5>Iter</h5>
				<h4>iter</h4>
				<h5>Push</h5>
				<h4>push : char *new_content</h4>
				Change the content of the string
				<h5>Get</h5>
				<h4>get : unsigned int</h4>
				<h3 id="array">Array</h3>
				<h4>_ctor: int size</h4>
				<h5>Dtor</h5>
				<h4>_dtor</h4>
				Free the array but not the content.
				<h5>Len</h5>
				<h4>len : Array target</h4>
				Length of the target
				<h5>sum</h5>
				<h4>sum : Array target1, Array target2</h4>
				Create a new array with the content of the both target
				<h5>str</h5>
				<h4>str : Array target</h4>
				<h5>next</h5>
				<h4>next : Iter it</h4>
				<h5>iter</h5>
				<h4>iter : Array target</h4>
				<h5>push</h5>
				<h4>push : Array target, Object element</h4>
				Put the element into the target.
				<h5>get</h5>
				<h4>get : Array target, unsigned int index</h4>
				<div class="code">
					<h2>Example Array</h2>
					<div>
						<span class="type">Array</span>&emsp;<span class="variable-name">array</span>;
						<br>
						<span class="type">Iter</span>&emsp;&emsp;<span class="variable-name">it</span>;
						<br><br>
						array = <span class="keyword">new</span>(__Array, 2);
						<br>
						push(array, <span class="string">"first"</span>);
						<br>
						push(array, <span class="string">"second"</span>);
						<br>
						it = iter(array);
						<br>
						<span class="keyword">while</span> (it)
						<br>
						&emsp;{
						<br>
						&emsp;&emsp;printf(<span class="string">"%s\n"</span>, it->content);
						<br>
						&emsp;&emsp;it = next(it);
						<br>
						&emsp;}
						<br>
						<span class="keyword">delete</span>(array);
					</div>
					<div>
						>> first
						<br>
						>> second
					</div>
				</div>
				<h3 id="liste">Liste</h3>
				<h5>Ctor</h5>
				<h4>_ctor</h4>
				<h5>Dtor</h5>
				<h4>_dtor</h4>
				Free the nodes but not the content.
				<h5>Delete all</h5>
				<h4>delete_all : Liste this</h4>
				Free all nodes and delete the content.
				<h5>Delete</h5>
				<h4>delete : Liste this, void *elem</h4>
				Find the node whose content is elem and remove it.
				<h5>Push front</h5>
				<h4>push_front : Liste this, void *elem</h4>
				Create a node and fill it with the elem. Then this node is append in the front of the list.
				<h5>Push back</h5>
				<h4>push_back : Liste this, Objet elem</h4>
				Create a node and fill it with the elem. Then this node is append in the back of the list.
				<h5>Pop</h5>
				<h4>pop : Liste this</h4>
				Remove the first elem and return his content.
				<h5>Find</h5>
				<h4>find : Liste this, void *pattern, fct comparator</h4>
				Check each element with the comparator function. Return the content of the node if the comparator function is true.
				<h5>Len</h5>
				<h4>len : Liste target</h4>
				Length of the target
				<h5>Sum</h5>
				<h4>sum : Liste target1, Liste target2</h4>
				Create a new liste with the content of the both target
				<h5>Str</h5>
				<h4>str : Liste target</h4>
				<h5>Next</h5>
				<h4>next : Iter it</h4>
				<h5>Iter</h5>
				<h4>iter : Liste target</h4>
				<h5>Push</h5>
				<h4>push : Liste target, Object element</h4>
				Alias of push_back
				<h5>Get</h5>
				<h4>get : Liste target, unsigned int index</h4>
				<div class="code">
					<h2>Example Liste</h2>
					<div>
						<span class="type">Liste</span>&emsp;<span class="variable-name">liste</span>;
						<br>
						<span class="type">Iter</span>&emsp;&emsp;<span class="variable-name">it</span>;
						<br><br>
						liste = <span class="keyword">new</span>(__Liste);
						<br>
						push_back(liste, <span class="string">"second"</span>);
						<br>
						push_back(liste, <span class="string">"third"</span>);
						<br>
						push_front(liste, <span class="string">"first"</span>);
						<br>
						it = iter(liste);
						<br>
						<span class="keyword">while</span> (it)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"%s\n"</span>, it->content);
						<br>
						&emsp;it = next(it);
						<br>
						}
						<br>
						<span class="keyword">delete</span>(liste);
					</div>
					<div>
						>> first
						<br>
						>> second
						<br>
						>> third
					</div>
				</div>
				<h3 id="myFunctions">My functions</h3>
				Modulary use some binding for usual functions like malloc...
				<br>
				This functions check the return value and display the errno error message if an error occured.
				<div class="code">
					<div>
						<span class="type">int</span>&emsp;&emsp;<span class="function-name">m_find</span>(<span class="type">char</span> *, <span class="type">char</span>, <span class="type">int</span> [][3]);
						<br>
						<span class="type">int</span>&emsp;&emsp;<span class="function-name">m_strlen</span>(<span class="type">char</span> *, <span class="type">char</span> *);
						<br>
						<span class="type">void</span>&emsp;<span class="function-name">m_strncpy</span>(<span class="type">char</span> *, <span class="type">const char</span> *, <span class="type">unsigned int</span>);
						<br>
						<span class="type">void</span>&emsp;<span class="function-name">m_strcpy</span>(<span class="type">char</span> *, <span class="type">char</span> *);
						<br>
						<span class="type">char</span>&emsp;*<span class="function-name">m_strndup</span>(<span class="type">char</span> *, <span class="type">unsigned int</span>);
						<br>
						<span class="type">char</span>&emsp;*<span class="function-name">m_strdup</span>(<span class="type">char</span> *);
						<br>
						<span class="type">char</span>&emsp;*<span class="function-name">m_strcat</span>(<span class="type">char</span> *, <span class="type">char</span> *);
						<br>
						<span class="type">void</span>&emsp;*<span class="function-name">m_realloc</span>(<span class="type">void</span> *, <span class="type">unsigned int</span>);
						<br>
						<span class="type">void</span>&emsp;*<span class="function-name">m_malloc</span>(<span class="type">unsigned int</span>);
						<br>
						<span class="type">int</span>&emsp;&emsp;<span class="function-name">m_open</span>(<span class="type">char</span> *, <span class="type">int</span>);
						<br>
						<span class="type">int</span>&emsp;&emsp;<span class="function-name">m_strcmp</span>(<span class="type">char</span> *, <span class="type">char</span> *);
						<br>
						<span class="type">int</span>&emsp;&emsp;<span class="function-name">m_read</span>(<span class="type">int</span>, <span class="type">void</span> *, <span class="type">size_t</span>);
						<br>
					</div>
				</div>
			</div>
			<hr>
			<div id="parsing">
				<h2>The parsing system</h2>
				<h3 id="stream">Stream</h3>
				<h5>Ctor</h5>
				<h4>_ctor : int file_descriptor</h4>
				Save the file descriptor
				<h5>Dtor</h5>
				<h4>_dtor</h4>
				Close the file descriptor if it isn't the input or the output or the error descriptor.
				<h5>Write</h5>
				<h4>write : Stream this, char *fmt, ...</h4>
				Write on the file descriptor.
				<h5>Read</h5>
				<h4>read : Stream this, Buffer buff</h4>
				Read datas on the file descriptor and append at the end of the buffer datas.
				<h3 id="parser">PEG Parser</h3>
				This parser is a peg parser engine.
				<br>
				<a href="http://en.wikipedia.org/wiki/Parsing_expression_grammar">http://en.wikipedia.org/wiki/Parsing_expression_grammar</a>
				<h5>Ctor</h5>
				<h4>_ctor : Object object</h4>
				Object could be a buffer or a stream. If it's a stream it will automaticaly read and fill a buffer.
				<h5>Dtor</h5>
				<h4>_dtor</h4>
				Delete the buffer.
				<h5>Read eof</h5>
				<h4>read_eof : Parser this</h4>
				EOF
				<h5>Read char</h5>
				<h4>read_char : Parser this, char c</h4>
				True if the first caracter is c and then consum it else false.
				<h5>Save state</h5>
				<h4>save_state : Parser this</h4>
				Save the current position into the buffer.
				<h5>Get state</h5>
				<h4>get_state : Parser this</h4>
				<h5>Read range</h5>
				A position need to be saved by calling save_state.
				<br>
				It return the string starting at the saved position and ending at the current position.
				<h4>read_range : Parser this, char c1, char c2</h4>
				'c1'..'c2'
				<h5>Read text</h5>
				<h4>read_text : Parser this, char *string</h4>
				"string"
				<h5>Read integer</h5>
				<h4>read_integer : Parser this</h4>
				['1'..'9' | ('0' & '1'..'9')] ['0'..'9']*
				<h5>Read identifiers</h5>
				<h4>read_identifiers : Parser this</h4>
				['a'..'z' | 'A'..'Z' | integer | '-' | '_'] ['a'..'z' | 'A'..'Z' | integer | '-' | '_']*
				<h3 id="json">Json</h3>
				Match the following rfc : <a href="http://www.rfc.fr/rfc/en/rfc4627.pdf">http://www.rfc.fr/rfc/en/rfc4627.pdf</a>
			</div>
			<hr>
			<div id="making">
				<h2>Make his own class</h2>
				<div class="code">
					<h2>Template.c</h2>
					<div>
						<pre>
// *****************************************************************************
//                                                                             *
//                                  TEMPLATE C                                 *
//                                                                             *
// Created by Thomas Chafiol  -  thomaschaf@gmail.com  -  20  /  09  /  2014   *
// *****************************************************************************
						</pre>
						<span class="preprocessor">#include</span> <span class="string">&lt;stdlib.h></span>
						<br><br>
						<pre>
// *****************************************************************************
//                                                                             *
//                                   METHODS                                   *
//                                                                             *
// *****************************************************************************
						</pre>
						<br>
						<span class="keyword">static</span> <span class="type">int</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="function-name">__template</span>(<span class="type">Template</span> this)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Function template\n"</span>);
						<br>
						&emsp;<span class="keyword">return</span> (true);
						<br>
						}
						<br><br>
						<pre>
// *****************************************************************************
//                                                                             *
//                             BUILT_IN METHODS                                *
//                                                                             *
// *****************************************************************************
						</pre>

						<span class="keyword">static</span> <span class="type">int</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="function-name">__push</span>(<span class="type">Template</span> this, <span class="type">Objet</span> ptr)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Function called by the push built in\n"</span>);
						<br>
						&emsp;<span class="keyword">return</span> (true);
						<br>
						}
						<br><br>
						<span class="keyword">static</span> <span class="type">Objet</span>&emsp;&emsp;&emsp;&emsp;<span class="function-name">__get</span>(<span class="type">Template</span> this, <span class="type">unsigned int</span> index)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Function called by the get built in\n"</span>);
						<br>
						&emsp;<span class="keyword">return</span> (NULL);
						<br>
						}
						<br><br>
						<span class="keyword">static</span> <span class="type">unsigned int</span>&emsp;<span class="function-name">__len</span>(<span class="type">Template</span> this)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Function called by the len built in\n"</span>);
						<br>
						&emsp;<span class="keyword">return</span> (42);
						<br>
						}
						<br><br>
						<span class="keyword">static</span> <span class="type">Iter</span>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="function-name">__next</span>(<span class="type">Iter</span> iter)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Function called by the next built in\n"</span>);
						<br>
						&emsp;iter->content = NULL;
						<br>
						&emsp;<span class="keyword">return</span> (iter);
						<br>
						}
						<br><br>
						<span class="keyword">static</span> <span class="type">Iter</span>&emsp;&emsp;&emsp;&emsp;<span class="function-name">__iter</span>(<span class="type">Template</span> this)
						<br>
						{
						<br>
						&emsp;<span class="type">Iter</span>&emsp;&emsp;iter;
						<br>
						&emsp;printf(<span class="string">"Function called by the iter built in\n"</span>);
						<br>
						&emsp;<span class="keyword">if</span> (ptr = m_malloc(sizeof(t_iter)) == NULL)
						<br>
						&emsp;&emsp;<span class="keyword">return</span> (NULL);
						<br>
						&emsp;iter = (Iter)ptr;
						<br>
						&emsp;iter->objet = this;
						<br>
						&emsp;iter->current = NULL;
						<br>
						&emsp;iter->content = NULL;
						<br>
						&emsp;iter->next = __next;
						<br>
						&emsp;<span class="keyword">return</span> (iter);
						<br>
						}
						<br><br>
						<span class="keyword">static</span> Objet&emsp;&emsp;&emsp;<span class="function-name">__sum</span>(<span class="type">Template</span> t1, <span class="type">Template</span> l2)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Function called by the sum built in\n"</span>);
						<br>
						&emsp;<span class="keyword">return</span> (NULL);
						<br>
						}
						<br><br>
						<span class="keyword">static</span> <span class="type">char</span>&emsp;&emsp;&emsp;*<span class="function-name">__str</span>(<span class="type">Array</span> this)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Function called by the str built in\n"</span>);
						<br>
						&emsp;<span class="keyword">return</span> (NULL);
						<br>
						}
						<br><br>
						<pre>
// ****************************************************************************
//                                                                            *
//                                    CLASS                                   *
//                                                                            *
// ****************************************************************************
						</pre>
						<span class="type">char</span> *__TEMPLATE = <span class="string">"template"</span>;
						<br><br>
						<span class="type">t_module</span> __Template = {&nbsp;&nbsp;sizeof(t_template), template_ctor, template_dtor,
						<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="string">"template"</span>,
						<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;__len,
						<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;__sum,
						<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;__str,
						<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;__iter,
						<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;__push,
						<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;__get
						<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;};
						<br><br>
						<pre>
// ****************************************************************************
//                                                                            *
//                                  CTOR/DTOR                                 *
//                                                                            *
// ****************************************************************************
						</pre>
						<br>
						<span class="keyword">static</span> <span class="type">void</span>&emsp;&emsp;<span class="function-name">__methods</span>(<span class="type">Template</span> this)
						<br>
						{
						&emsp;this->template = __template;
						<br>
						}
						<br><br>
						<span class="type">int</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="function-name">template_ctor</span>(<span class="type">Template</span> this, <span class="type">va_list</span> *ap)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Template CTOR\n"</span>);
						<br>
						&emsp;this->content = va_arg(*ap, <span class="type">unsigned int</span>);
						<br>
						__metods(this);
						<br>
						<span class="keyword">return</span> (true);
						<br>
						}
						<br><br>
						<span class="type">int</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="function-name">template_dtor</span>(<span class="type">Template</span> this)
						<br>
						{
						<br>
						&emsp;printf(<span class="string">"Template DTOR\n"</span>);
						<br>
						&emsp;<span class="keyword">return</span> (true);
						<br>
						}
					</div>
				</div>

				<div class="code">
					<h2>Template.h</h2>
						<div>
							<pre>
// ****************************************************************************
//                                                                            *
//                                TEMPLATE H                                  *
//                                                                            *
// Created by Thomas Chafiol  -  thomaschaf@gmail.com  -  20  /  09  /  2014  *
// *****************************************************************************
							</pre>
							<span class="preprocessor">#ifndef</span>&nbsp;&nbsp;<span class="string">__LISTE_H__</span>
							<br>
							<span class="preprocessor">#define</span> <span class="string">__LISTE_H__</span>
							<br><br>
							<span class="preprocessor">#include</span> <span class="string">"modulaire.h"</span>
							<br>
							<span class="preprocessor">#include</span> <span class="string">"utils.h"</span>
							<br><br>
							<span class="keyword">typedef</span> <span class="type">struct</span>&emsp;&emsp;s_template
							<br>
							{
							<br>
							&emsp;<span class="type">t_module</span>&emsp;&emsp;&emsp; module;
							<br>
							&emsp;<span class="type">fct</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;template;
							<br>
							}&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;t_template;
							<br><br>
							<span class="keyword">typedef</span> <span class="type">t_liste</span>&emsp;&emsp;* Liste;
							<br><br>
							<span class="type">int</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="function-name">liste_ctor</span>(<span class="type">Liste</span>);
							<br>
							<span class="type">int</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="function-name">liste_dtor</span>();
							<br><br>
							<span class="keyword">extern</span> <span class="type">char</span> &emsp;&emsp;&emsp;*__LISTE;
							<br>
							<span class="keyword">extern</span> <span class="type">t_module</span>&emsp;__Liste;
							<br><br>
							<span class="preprocessor">#endif</span> <span class="comment">/* __LISTE_H__ */</span>
						</div>

				</div>
				<hr>
				<div id="hineritance">
					<h2>The hineritance</h2>
					It is possible to simulate the hineritance.
					<br>
					Some example could be find on the Json.c file where Json hinerit from Parser.
					<br>
					An other example could be find in the Buffer.c file where Buffer hinerit from String.
				</div>
				<hr>
				<div id="singleton">
					<h2>The singleton</h2>
					<div class="code">
						<h2>Singleton.c</h2>
						<div>
							<pre>
// ****************************************************************************
//                                                                            *
//                                    CLASS                                   *
//                                                                            *
// ****************************************************************************
							</pre>
							char *__SINGLETON = "singleton";
							<br><br>
							<span class="comment">/* Add static to simulate the singleton pattern */</span>
							<br>
							<span class="keyword">static</span> t_module __Singleton = {&nbsp;&nbsp;sizeof(t_singleton), singleton_ctor, singleton_dtor,
								<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"singleton",
								<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0,
								<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0,
								<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0,
								<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0,
								<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0,
								<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0
								<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;};
								<br><br>

							<pre>
// ****************************************************************************
//                                                                            *
//                                  SINGLETON                                 *
//                                                                            *
// ****************************************************************************
							</pre>
								<span class="type">Singleton</span>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="function-name">get_singleton</span>(<span class="type">int</span> <span class="variable-name">ctor</span>, <span class="type">Objet</span> <span class="variable-name">param</span>)
								<br>
								{
								<br>
								&emsp;<span class="keyword">static</span> <span class="type">Singleton</span>&emsp;<span class="variable-name">singleton</span> = <span class="pointer">NULL</span>;
								<br>
								<br>
								&emsp;<span class="keyword">if</span> (ctor && singleton == <span class="pointer">NULL</span>)
								<br>
								&emsp;&emsp;singleton = <span class="keyword">new</span>(__Singleton, path);
								<br>
								&emsp;<span class="keyword">else if</span> (!ctor)
								<br>
								&emsp;{
								<br>
								&emsp;&emsp;<span class="keyword">delete</span>(singleton);
								<br>
								&emsp;&emsp;singleton = <span class="pointer">NULL</span>;
								<br>
								&emsp;}
								<br>
								&emsp;<span class="keyword">return</span> (logger);
								<br>
								}
								<br>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#doc ul ul").hide()
	$("#doc ul li").click(function() {
		$("#doc ul ul").hide();
		$(this).children("ul").show();
	})

	function scroll(element) {
		var target = $(element).attr("target");

		if (target !== undefined) {
			$('#' + target).ScrollTo({
					duration: 1500,
					easing: 'linear',
					offsetTop: 110,
			});
		}
	};

	$("#doc li").click(function() {
		scroll(this);
	});

	$("#doc div").click(function() {
		scroll(this);
	});
</script>
<?php $this->render("footer") ?>
