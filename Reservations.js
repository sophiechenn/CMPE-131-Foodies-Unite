import React from 'react';
import { Table, Button, Card, CardBody,
		CardTitle, CardHeader, ListGroup, ListGroupItem,
		Container, Row, Col } from 'reactstrap';
import homeImage from './homeImage.jpg';
import "./Reservations.css";

var pageStyle = {
	width: "100%",
	backgroundRepeat: "no-repeat",
	backgroundSize: "cover",
	backgroundPosition: "center center",
	backgroundImage: `url(${homeImage})`,

};

class Reservations extends React.Component {
	constructor (props) {
		super (props)
		this.state = {
			history: []
		}
	}

	render() {
		return (
			<div className="col-lg-12 reservations-container col-auto" style={pageStyle}>
				<div className="reservations-form-container col-lg-12">
					<br/>
					<br/>
					<br/>
					<br/>         
					<br/> 
					<div>
						<Container>
							<Row>
								<Col>
									<Card>
										<CardBody>
											<br/>
											<CardTitle> <h2> My Reservations </h2> </CardTitle>
											<br />
											<div className="reservations-table-wrapper-scroll-y reservations-scrollbar">
												<Table hover>
								    				<thead>
								      					<tr>
								       						<th>Booking ID</th>
								        					<th>Date In</th>
								        					<th>Date Out</th>
								        					<th>Hotel</th>
								        					<th>Room Type, Quantity</th>
								        					<th>Total Price</th>
								        					<th>Modify/Cancel</th>
								        					<th>Status</th>
								      					</tr>
								    				</thead>
								    				<tbody>
								    					<tr>
													     		<td> holder </td>
													     		<td> holder </td>
													        	<td> holder </td>
													        	<td> 
													        		holder
													        		<br />
													        		include address
													        	</td>
													        	<td> 
													        		<Table size="sm" borderless>
													        			holder, 3
													        			<br />
																		can also display room #
													        		</Table>
													        	</td>
													        	<td> holder </td>
													        	<td> <Button color ="warning"> Modify </Button> <Button color="danger"> Cancel </Button> </td>
													        	<td> holder </td>
											        	</tr>
								    				</tbody>
								    				<tbody>
								    					<tr>
													     		<td> holder </td>
													     		<td> holder </td>
													        	<td> holder </td>
													        	<td> holder </td>
													        	<td> 
													        		<Table size="sm" borderless>
													        			holder, 3
													        			<br />
																		holder, 2
													        		</Table>
													        	</td>
													        	<td> holder </td>
													        	<td> <Button color ="warning"> Modify </Button> <Button color="danger"> Cancel </Button> </td>
													        	<td> holder </td>
											        	</tr>
								    				</tbody>
								    				<tbody>
								    					<tr>
													     		<td> holder </td>
													     		<td> holder </td>
													        	<td> holder </td>
													        	<td> holder </td>
													        	<td> 
													        		<Table size="sm" borderless>
													        			holder, 3
													        			<br />
																		holder, 2
													        		</Table>
													        	</td>
													        	<td> holder </td>
													        	<td> <Button color ="warning"> Modify </Button> <Button color="danger"> Cancel </Button> </td>
													        	<td> holder </td>
											        	</tr>
								    				</tbody>
								    				<tbody>
								    					<tr>
													     		<td> holder </td>
													     		<td> holder </td>
													        	<td> holder </td>
													        	<td> holder </td>
													        	<td> 
													        		<Table size="sm" borderless>
													        			holder, 3
													        			<br />
																		holder, 2
													        		</Table>
													        	</td>
													        	<td> holder </td>
													        	<td> <Button color ="warning"> Modify </Button> <Button color="danger"> Cancel </Button> </td>
													        	<td> holder </td>
											        	</tr>
								    				</tbody>
								    			</Table>
							    			</div>
								    	</CardBody>
								    </Card>
								</Col>
							</Row>
						</Container>
					</div>
				</div>
			</div>
		);
	}
}

export default Reservations;